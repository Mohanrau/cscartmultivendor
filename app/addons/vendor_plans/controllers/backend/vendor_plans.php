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

if (!fn_allowed_for('MULTIVENDOR')) {
    return array(CONTROLLER_STATUS_DENIED);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $suffix = 'manage';

    if ($mode == 'update') {
        if (!empty($_REQUEST['plan_id'])) {
            $plan = VendorPlan::model()->find($_REQUEST['plan_id']);
        } else {
            $plan = new VendorPlan;
        }
        $plan->attributes($_REQUEST['plan_data']);
        $plan->save();
    }

    if ($mode == 'm_update') {
        if (!empty($_REQUEST['plans_data'])) {
            foreach ($_REQUEST['plans_data'] as $plan_id => $plan_data) {
                $plan = VendorPlan::model()->find($plan_id);
                $plan->attributes($plan_data);
                if (!empty($_REQUEST['default_plan']) && $_REQUEST['default_plan'] == $plan_id) {
                    $plan->is_default = true;
                }
                $plan->save();
            }
        }
    }

    if ($mode == 'delete') {
        if ($plan = VendorPlan::model()->find($_REQUEST['plan_id'])) {
            $plan->delete();
        }
    }

    if ($mode == 'm_delete') {
        if (!empty($_REQUEST['plan_ids'])) {
            foreach ($_REQUEST['plan_ids'] as $plan_id) {
                if ($plan = VendorPlan::model()->find($plan_id)) {
                    $plan->delete();
                }
            }
        }
    }

    if ($mode == 'update_status') {

        $plan = VendorPlan::model()->find($_REQUEST['id']);
        if ($plan) {
            $previos_status = $plan->status;
            $plan->status = $_REQUEST['status'];
            if ($plan->save()) {
                fn_set_notification('N', __('notice'), __('status_changed'));
            } else {
                Tygh::$app['ajax']->assign('return_status', $previos_status);
            }
        }

        exit;
    }

    return array(CONTROLLER_STATUS_OK, 'vendor_plans.' . $suffix);
}

if ($mode == 'manage') {

    $params = array_merge(
        array(
            'items_per_page'      => Registry::get('settings.Appearance.admin_elements_per_page'),
        ),
        $_REQUEST,
        array(
            'return_params'       => true,
            'get_companies_count' => true,
            'lang_code'           => DESCR_SL,
        )
    );
    list($plans, $search) = VendorPlan::model()->findMany($params);
    Tygh::$app['view']->assign('plans', $plans);
    Tygh::$app['view']->assign('search', $search);

    Tygh::$app['view']->assign('preview_uri', fn_url('companies.vendor_plans', 'C'));

} elseif ($mode == 'update' || $mode == 'add') {

    $id = 0;
    if ($mode == 'update') {
        $plan = VendorPlan::model()->find($_REQUEST['plan_id']);
        if (!$plan) {
            return array(CONTROLLER_STATUS_NO_PAGE);
        }

        Tygh::$app['view']->assign('plan', $plan);
        $id = $plan->plan_id;
    }

    $tabs = array(
        'general_' . $id => array(
            'title' => __('general'),
            'js' => true,
        ),
        'commission_' . $id => array(
            'title' => __('vendor_plans.commission'),
            'js' => true,
        ),
        'restrictions_' . $id => array(
            'title' => __('vendor_plans.restrictions'),
            'js' => true,
        ),
        'categories_' . $id => array(
            'title' => __('categories'),
            'js' => true,
        ),
    );

    Registry::set('navigation.tabs', $tabs);

} elseif ($mode == 'async') {

    Company::periodicityPayments();
    exit;

}

Tygh::$app['view']->assign('periodicities', VendorPlan::getPeriodicitiesList());
