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

namespace Tygh\Models;

use Tygh\Models\Components\AModel;
use Tygh\Models\Components\Relation;
use Tygh\Registry;

class VendorPlan extends AModel
{
    public function getTableName()
    {
        return '?:vendor_plans';
    }

    public function getPrimaryField()
    {
        return 'plan_id';
    }

    public function getDescriptionTableName()
    {
        return '?:vendor_plan_descriptions';
    }

    public function getFields($params)
    {
        $fields = array(
            '?:vendor_plan_descriptions.*',
            '?:vendor_plans.*',
        );

        /**
         * Chenge fields list for main SQL query
         *
         * @param object $instance Current model instance
         * @param array  $fields   Fields list
         * @param array  $params   Params array
         */
        fn_set_hook('vendor_plan_get_fields', $this, $fields, $params);

        return $fields;
    }

    public function getSearchFields()
    {
        $search_fields = array(
            'number' => array(
                'is_default',
            ),
            'string' => array(
                'status',
            ),
            'text' => array(
                'plan',
            ),
            'range' => array(
                'price',
            ),
            'in' => array(
                'periodicity'
            ),
        );

        /**
         * Setting search fields schema
         *
         * @param object $instance      Current model instance
         * @param array  $search_fields Fields list
         */
        fn_set_hook('vendor_plan_get_search_fields', $this, $search_fields);

        return $search_fields;
    }

    public function getSortFields()
    {
        $sort_fields = array(
            'position' => 'position',
            'plan'     => 'plan',
            'status'   => 'status',
            'price'    => 'price',
        );

        /**
         * Setting sorting fields schema
         *
         * @param object $instance    Current model instance
         * @param array  $sort_fields Sorting fields schema
         */
        fn_set_hook('vendor_plan_get_sort_fields', $this, $sort_fields);

        return $sort_fields;
    }

    public function getRelations()
    {
        $relations = array(
            'companies' => array(Relation::HAS_MANY, 'Tygh\Models\Company', 'plan_id'),
            'companiesCount' => array(Relation::HAS_MANY, 'Tygh\Models\Company', 'plan_id', null, array(
                'get_count' => true,
            )),
        );

        /**
         * Setting relations schema
         *
         * @param object $instance  Current model instance
         * @param array  $relations Relations schema
         */
        fn_set_hook('vendor_plan_get_relations', $this, $relations);

        return $relations;
    }

    public function getExtraCondition($params)
    {
        $condition = array();

        // Getting plan by company_id
        if (isset($params['company_id'])) {
            $company_plan_id = db_get_field(
                "SELECT plan_id FROM ?:companies WHERE company_id = ?i", $params['company_id']
            );
            $condition['company_id'] = db_quote("?:vendor_plans.plan_id = ?i", $company_plan_id);
        }

        // Getting plans available for selected company
        if (isset($params['allowed_for_company_id'])) {
            $statuses = array('A');
            if (AREA == 'A' && !Registry::get('runtime.company_id')) {
                $statuses[] = 'H';
            }
            $sub_conditions = array(
                db_quote("status IN(?a)", $statuses)
            );
            if ($params['allowed_for_company_id']) {
                $company_plan_id = db_get_field(
                    "SELECT plan_id FROM ?:companies WHERE company_id = ?i", $params['allowed_for_company_id']
                );
                if ($company_plan_id) {
                    $sub_conditions[] = db_quote("?:vendor_plans.plan_id = ?i", $company_plan_id);
                }
            }
            $condition['allowed_for_company_id'] = sprintf('(%s)', implode(' OR ', $sub_conditions));
        }

        return $condition;
    }

    public function prepareQuery(&$params, &$fields, &$sorting, &$joins, &$condition)
    {
        /**
         * Change SQL parameters for vendor plans select
         *
         * @param object $instance   Current model instance
         * @param array  $params     Params array
         * @param array  $fields     Fields list
         * @param array  $sortings   Sortings list
         * @param array  $joins      Joins list
         * @param array  $conditions Conditions list
         */
        fn_set_hook('vendor_plan_get_list', $this, $params, $fields, $sorting, $joins, $conditions);
    }

    public function gatherAdditionalItemsData(&$items, $params)
    {
        $plan_ids = array();
        foreach ($items as $item) {
            $plan_ids[] = $item['plan_id'];
        }

        if (!empty($params['get_companies_count']) && $items) {
            $companies = db_get_hash_single_array(
                "SELECT plan_id, COUNT(company_id) as companies FROM ?:companies WHERE plan_id IN(?n) GROUP BY plan_id",
                array('plan_id', 'companies'), $plan_ids
            );
        }

        $current_usage = array();
        if (!empty($params['check_availability']) && !empty($params['allowed_for_company_id'])) {
            $company = Company::model()->find($params['allowed_for_company_id']);
            $current_usage = array(
                'products' => $company->getCurrentProducts(),
                'revenue'  => $company->getCurrentRevenue(),
            );
        }

        foreach ($items as &$item) {
            $item['category_ids'] = !empty($item['categories']) ? explode(',', $item['categories']) : array();
            if (!empty($params['get_companies_count'])) {
                $item['companies_count'] = isset($companies[$item['plan_id']]) ? $companies[$item['plan_id']] : 0;
            }
            if ($current_usage) {
                $item['avail_errors'] = array();
                if ($item['products_limit'] && $item['products_limit'] < $current_usage['products']) {
                    $item['avail_errors'][] = __('vendor_plans.many_products_text', array(
                        '[actual]' => intval($current_usage['products']),
                        '[allowed]' => intval($item['products_limit']),
                    ));
                }
                if (floatval($item['revenue_limit']) && $item['revenue_limit'] < $current_usage['revenue']) {
                    $item['avail_errors'][] = __('vendor_plans.much_revenue_text', array(
                        '[actual]' => self::formatPrice($current_usage['revenue']),
                        '[allowed]' => self::formatPrice($item['revenue_limit']),
                    ));
                }
            }
        }

        /**
         * Process selected vendor plans data
         *
         * @param object $instance Current model instance
         * @param array  $items    Items
         * @param array  $params   Params array
         */
        fn_set_hook('vendor_plan_get_list_post', $this, $items, $params);
    }

    public function beforeSave()
    {
        $result = true;

        if (!empty($this->categories) && is_array($this->categories)) {
            $this->categories = implode(',', $this->categories);
        }

        if (
            $this->status == 'D'
            && $this->current_attributes['status'] != 'D'
            && intval($this->companiesCount)
        ) {
            $result = false;
            fn_set_notification('E', __('error'), __('vendor_plans.disable_plan_vendor_exists_text'));
        }

        /**
         * Actions before saving plan data
         *
         * @param object $plan   Instance of VendorPlan
         * @param bool   $result Can save flag
         */
        fn_set_hook('vendor_plan_before_save', $this, $result);

        return $result;
    }

    public function afterSave()
    {
        if (!empty($this->is_default)) {
            db_query("UPDATE ?:vendor_plans SET is_default = 0 WHERE plan_id <> ?i", $this->plan_id);
        }

        /**
         * Actions after saving plan data
         *
         * @param object $plan Instance of VendorPlan
         */
        fn_set_hook('vendor_plan_after_save', $this);
    }

    public function beforeDelete()
    {

        $result = true;

        $company_exist = db_get_field("SELECT company FROM ?:companies WHERE plan_id = ?i", $this->plan_id);
        if ($company_exist) {
            fn_set_notification('E', __('error'), __('vendor_plans.delete_plan_vendor_exists_text'));

            $result = false;
        }

        /**
         * Actions before deleting plan
         *
         * @param object $plan   Instance of VendorPlan
         * @param bool   $result Can delete flag
         */
        fn_set_hook('vendor_plan_before_delete', $this, $result);

        return $result;
    }

    /**
     * Get available plans for block
     * @return array
     */
    public static function getAvailablePlans()
    {
        return static::model()->findMany(array(
            'allowed_for_company_id' => Registry::get('runtime.company_id'),
        ));
    }

    public static function getPeriodicitiesList()
    {
        return db_get_list_elements('vendor_plans', 'periodicity', true, DESCR_SL, 'vendor_plans.periodicity_');
    }

    public function commissionRound()
    {
        return floatval($this->commission);
    }

    public static function formatPrice($price)
    {
        $currency = Registry::get('currencies.' . CART_PRIMARY_CURRENCY);

        $price = fn_format_rate_value(
            $price,
            'F',
            $currency['decimals'],
            $currency['decimals_separator'],
            $currency['thousands_separator'],
            $currency['coefficient']
        );

        return $currency['after'] == 'Y' ? $price . $currency['symbol'] : $currency['symbol'] . $price;
    }

}
