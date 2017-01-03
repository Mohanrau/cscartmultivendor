<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

use Tygh\Registry;
use Tygh\Models\VendorPlan;
use Tygh\Models\Company;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_vendor_plans_install()
{
    // vendor_payouts table. These fields shouldn't remove: They are used by vendor_commission
    $fields = fn_get_table_fields('vendor_payouts');
    if (!in_array('commission_amount', $fields)) {
        db_query("ALTER TABLE ?:vendor_payouts ADD `commission_amount` decimal(12,2) NOT NULL default '0'");
    }
    if (!in_array('commission', $fields)) {
        db_query("ALTER TABLE ?:vendor_payouts ADD `commission` decimal(12,2) NOT NULL default '0'");
    }
    if (!in_array('commission_type', $fields)) {
        db_query("ALTER TABLE ?:vendor_payouts ADD `commission_type` char(1) NOT NULL default 'A'");
    }

    // import data exported from the vendor commission add-on
    $vendors_demo = Registry::get('config.dir.addons') . 'vendor_plans/database/demo_vendors.sql';
    if (file_exists($vendors_demo)) {
        db_import_sql_file($vendors_demo, 16348, false, false);
        fn_rm($vendors_demo);
    }

    db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id) VALUES ('view_vendor_plans', 'Y', 'vendors')");
    db_query("REPLACE INTO ?:privileges (privilege, is_default, section_id) VALUES ('manage_vendor_plans', 'Y', 'vendors')");
}

function fn_vendor_plans_uninstall()
{
    db_query("DELETE FROM ?:privileges WHERE privilege IN (?a)", array('view_vendor_plans', 'manage_vendor_plans'));
}

function fn_vendor_plans_get_companies(&$params, &$fields, &$sortings, &$condition, &$join, &$auth, &$lang_code, &$group)
{
    $fields[] = '?:vendor_plan_descriptions.plan';
    $sortings['plan'] = '?:vendor_plan_descriptions.plan';
    $join .= db_quote(
        ' LEFT JOIN ?:vendor_plan_descriptions'
        . ' ON ?:companies.plan_id = ?:vendor_plan_descriptions.plan_id'
        . ' AND ?:vendor_plan_descriptions.lang_code = ?s',
        $lang_code
    );
    if (!empty($params['plan_id'])) {
        $condition .= db_quote(' AND ?:companies.plan_id IN (?n)', (array)$params['plan_id']);
    }
}

function fn_vendor_plans_get_company_data(&$company_id, &$lang_code, &$extra, &$fields, &$join, &$condition)
{
    $fields[] = '?:vendor_plan_descriptions.plan';
    $join .= db_quote(
        ' LEFT JOIN ?:vendor_plan_descriptions'
        . ' ON companies.plan_id = ?:vendor_plan_descriptions.plan_id'
        . ' AND ?:vendor_plan_descriptions.lang_code = ?s',
        $lang_code
    );
}

function fn_vendor_plans_update_company_pre(&$company_data, &$company_id, &$lang_code, &$can_update)
{
    // Getting current plan
    $company_data['current_plan'] = 0;
    if ($company_id) {
        $curent_data = db_get_row("SELECT plan_id, status FROM ?:companies WHERE company_id = ?i", $company_id);
        $company_data['current_plan'] = $curent_data['plan_id'];
        if (empty($company_data['status'])) {
            $company_data['status'] = $curent_data['status'];
        }
        if (empty($company_data['plan_id'])) {
            $company_data['plan_id'] = $company_data['current_plan'];
        }
    }

    // Check plan availability
    if (!empty($company_data['plan_id'])) {
        $selected_plan = VendorPlan::model()->find($company_data['plan_id'], array(
            'allowed_for_company_id' => $company_id
        ));
        if (!$selected_plan) {
            $company_data['plan_id'] = $company_data['current_plan'] ?: 0;
        }
    }

    // Set default plan
    if (empty($company_data['plan_id']) && empty($company_data['current_plan'])) {
        $default_plan = VendorPlan::model()->find(array(
            'is_default' => 1,
            'allowed_for_company_id' => $company_id,
        ));
        if ($default_plan) {
            $company_data['plan_id'] = $default_plan->plan_id;
        }
    }

    // Check params availability
    if (
        Registry::get('runtime.company_id')
        && !empty($company_data['plan_id'])
        && $company_data['plan_id'] != $company_data['current_plan']
    ) {
        $plan = VendorPlan::model()->find($company_data['plan_id'], array(
            'allowed_for_company_id' => $company_id,
            'check_availability' => true,
        ));
        if (!empty($plan->avail_errors) || Registry::ifGet('addons.vendor_plans.allow_vendors_to_change_plan', 'N') == 'N') {
            fn_set_notification('E', __('error'), __('vendor_plans.plan_not_available_text'));
            $can_update = false;
        }
    }
}

function fn_vendor_plans_update_company(&$company_data, &$company_id, &$lang_code, &$action)
{
    if (
        isset($company_data['plan_id'])
        && isset($company_data['current_plan'])
        && $company_data['plan_id'] != $company_data['current_plan']
        && $company_data['status'] != 'N'
    ) {
        $company = Company::model()->find($company_id);
        /** @var \Tygh\Mailer\Mailer $mailer */
        $mailer = Tygh::$app['mailer'];

        $mailer->send(array(
            'to' => 'company_support_department',
            'from' => 'default_company_support_department',
            'data' => array(
                'vendor' => $company,
                'plan' => $company->plan,
            ),
            'template_code' => 'vendor_plans_plan_changed',
            'tpl' => 'addons/vendor_plans/companies/plan_changed.tpl',
            'company_id' => $company->company_id,
        ), 'A', $company->lang_code);

        if ($company_data['status'] == 'A') {
            $company->payment();
        }
    }
}

function fn_vendor_plans_change_company_status_before_mail(&$company_id, &$status_to, &$reason, &$status_from, &$skip_query, &$notify, &$company_data, &$user_data)
{
    $company = Company::model()->find($company_id);
    $user_data['plan'] = $company->plan; // Need for email notifications
    if ($status_from != 'A' && $status_to == 'A') {
        $company->payment();
    }
}

function fn_vendor_plans_delete_category_after(&$category_id)
{
    db_query("UPDATE ?:vendor_plans SET categories = ?p", fn_remove_from_set('categories', $category_id));
}

function fn_vendor_plans_mve_place_order(&$order_info, &$company_data, &$action, &$order_status, &$cart, &$data, &$payout_id, &$auth)
{
    if (
        $company_data['plan_id']
        && $plan = VendorPlan::model()->find($company_data['plan_id'])
    ) {
        $commission = $order_info['total'] > 0 ? $plan->commission : 0;
        $commission_amount = 0;

        //Calculate commission amount and check if we need to include shipping cost
        $shipping_cost = Registry::get('addons.vendor_plans.include_shipping') == 'N' ? $order_info['shipping_cost'] : 0;
        $commission_amount = ($order_info['total'] - $shipping_cost) * $commission / 100;

        //Check if we need to take payment surcharge from vendor
        if (Registry::get('addons.vendor_plans.include_payment_surcharge') == 'Y') {
            $commission_amount += $order_info['payment_surcharge'];
        }

        if ($commission_amount > $order_info['total']) {
            $commission_amount = $order_info['total'];
        }

        $data['commission'] = $commission;
        $data['commission_amount'] = $commission_amount;
        $data['commission_type'] = 'P'; // Backward compatibility
    }
}

function fn_vendor_plans_mve_place_order_post(&$order_id, &$action, &$order_status, &$cart, &$auth, &$order_info, &$company_data, &$data, &$payout_id)
{
    if ($order_info['is_parent_order'] != 'Y' && !empty($order_info['company_id'])) {
        if ($company = Company::model()->find($order_info['company_id'])) {
            $company->canGetRevenue(true);
        }
    }
}

function fn_vendor_plans_mve_companies_get_payouts(&$bcf_query, &$current_payouts_query, &$payouts_query, &$join, &$total, &$condition, &$date_condition)
{
    $bcf_query = str_replace(
        'SUM(payouts.order_amount) + SUM(payouts.payout_amount) AS BCF',
        'SUM(payouts.order_amount) + SUM(payouts.payout_amount) - SUM(payouts.commission_amount) AS BCF',
        $bcf_query
    );
    $current_payouts_query = str_replace(
        'SUM(payouts.order_amount) + SUM(payouts.payout_amount) AS LPM',
        'SUM(payouts.order_amount) + SUM(payouts.payout_amount) - SUM(payouts.commission_amount) AS LPM',
        $current_payouts_query
    );
    $payouts_query = str_replace(
        "IF(payouts.order_id <> 0, payouts.end_date, '') AS date",
        "IF(payouts.order_id <> 0 OR payouts.plan_id <> 0, payouts.end_date, '') AS date",
        $payouts_query
    );
}

function fn_vendor_plans_get_categories(&$params, &$join, &$condition, &$fields, &$group_by, &$sortings, &$lang_code)
{
    if (Registry::get('runtime.company_id')) {
        $company_id = Registry::get('runtime.company_id');
    } elseif (!empty($params['company_ids'])) {
        $company_id = (int) $params['company_ids'];
    }
    if (!empty($company_id)) {
        $plan = VendorPlan::model()->find(array('company_id' => $company_id));
        if ($plan && $plan->category_ids) {
            $company_condition = db_quote(' AND ?:categories.category_id IN (?n)', $plan->category_ids);
            Registry::set('runtime.vendor_plans_company_condition', $company_condition);
            $condition .= $company_condition;
        }
    }
}

function fn_vendor_plans_get_categories_after_sql(&$categories, &$params, &$join, &$condition, &$fields, &$group_by, &$sortings, &$sorting, &$limit, &$lang_code)
{
    // we can't build the correct tree for vendors if there are not available parent categories
    if ($company_condition = Registry::get('runtime.vendor_plans_company_condition')) {
        Registry::del('runtime.vendor_plans_company_condition');
        $selected_ids = array_keys($categories);
        // so get skipped parent categories ids
        $parent_ids = array();
        foreach ($categories as $v) {
            if ($v['parent_id'] && !in_array($v['parent_id'], $selected_ids)) {
                $parent_ids = array_merge($parent_ids, explode('/', $v['id_path']));
            }
        }
        if ($parent_ids) {
            $_condition = str_replace($company_condition, '', $condition);
            $_condition .= db_quote(' AND ?:categories.category_id IN (?a)', array_unique($parent_ids));
            $fields[] = '1 as disabled'; //mark such categories as disabled
            $parent_categories = db_get_hash_array(
                "SELECT " . implode(',', $fields)
                . " FROM ?:categories"
                . " LEFT JOIN ?:category_descriptions"
                . "  ON ?:categories.category_id = ?:category_descriptions.category_id"
                . "  AND ?:category_descriptions.lang_code = ?s $join"
                . " WHERE 1 ?p $group_by $sorting ?p",
                'category_id', $lang_code, $_condition, $limit
            );
            $categories = $categories + $parent_categories;
        }
    }
}

function fn_vendor_plans_get_category_data(&$category_id, &$field_list, &$join, &$lang_code, &$conditions)
{
    if ($company_id = Registry::get('runtime.company_id')) {
        $plan = VendorPlan::model()->find(array('company_id' => $company_id));
        if ($plan && $plan->category_ids) {
            $conditions .= db_quote(" AND ?:categories.category_id IN(?n)", $plan->category_ids);
        }
    }
}

function fn_vendor_plans_take_payment_surcharge(&$products, &$take_surcharge_from_vendor)
{
    if (Registry::get('addons.vendor_plans.include_payment_surcharge') == 'Y') {
        $take_surcharge_from_vendor = true;
    }
}

function fn_vendor_plans_set_admin_notification(&$user_data)
{
    Tygh::$app['session']['vendor_plans_payments'] = true;
}

function fn_vendor_plans_dispatch_before_display()
{
    if (!empty(Tygh::$app['session']['vendor_plans_payments'])) {
        unset(Tygh::$app['session']['vendor_plans_payments']);
        Tygh::$app['view']->assign('vendor_plans_payments', true);
    }
}

function fn_vendor_plans_update_product_pre(&$product_data, &$product_id, &$lang_code, &$can_update)
{
    if ($can_update) {
        $company_id = Registry::get('runtime.company_id');
        if (!$company_id && isset($product_data['company_id'])) {
            $company_id = $product_data['company_id'];
        }

        if ($company_id) {
            $company = Company::model()->find($company_id);
            if (!$product_id && !$company->canAddProduct(true)) {
                $can_update = false;
            }

            if ($company->category_ids) {
                if (
                    !empty($product_data['main_category'])
                    && !in_array($product_data['main_category'], $company->category_ids)
                ) {
                    unset($product_data['main_category']);
                }
                if (empty($product_data['category_ids'])) {
                    $product_data['category_ids'] = db_get_fields(
                        "SELECT category_id FROM ?:products_categories WHERE product_id = ?i", $product_id
                    );
                }
                $product_data['category_ids'] = array_intersect($product_data['category_ids'], $company->category_ids);
                if (empty($product_data['category_ids'])) {
                    $can_update = false;
                }
                if (!$can_update) {
                    fn_set_notification('E', __('error'), __('vendor_plans.category_is_empty'));
                }
            }

        } else {
            $can_update = false;
        }
    }
}

// Exim

function fn_vendor_plans_import_check_object_id($primary_object_id, &$processed_data, &$skip_record)
{
    $company = Company::current();
    if ($company && empty($primary_object_id) && !$company->canAddProduct(true)) {
        $skip_record = true;
        $processed_data['S'] ++;
    }
}
