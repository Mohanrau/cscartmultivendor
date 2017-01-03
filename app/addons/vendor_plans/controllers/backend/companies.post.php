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

if (!fn_allowed_for('MULTIVENDOR')) {
    return;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    return;
}

if ($mode == 'manage' || $mode == 'update' || $mode == 'add') {
    $company_id = Registry::get('runtime.company_id');
    $params = array(
        'allowed_for_company_id' => $company_id,
    );
    if ($mode == 'update' || $mode == 'add') {
        $params['check_availability'] = true;
    }
    if (empty($company_id) || Registry::ifGet('addons.vendor_plans.allow_vendors_to_change_plan', 'N') == 'Y') {
        $vendor_plans = VendorPlan::model()->findMany($params);
    } else {
        $company_data = Tygh::$app['view']->getTemplateVars('company_data');
        $vendor_plans = array(
            VendorPlan::model()->find($company_data['plan_id'], array(
                'allowed_for_company_id' => $company_id
            ))
        );
    }
    Tygh::$app['view']->assign('vendor_plans', $vendor_plans);
}

if ($mode == 'update' || $mode == 'add') {
    Registry::set('navigation.tabs.plan', array(
        'title' => __('vendor_plans.plan'),
        'js' => true,
    ));
}
