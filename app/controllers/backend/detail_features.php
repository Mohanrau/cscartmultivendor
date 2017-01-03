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

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$_REQUEST['product_id'] = empty($_REQUEST['product_id']) ? 0 : $_REQUEST['product_id'];

if (fn_allowed_for('MULTIVENDOR')) {
    if (
        isset($_REQUEST['product_id']) && !fn_company_products_check($_REQUEST['product_id'])
        ||
        isset($_REQUEST['product_ids']) && !fn_company_products_check($_REQUEST['product_ids'])
    ) {
        return array(CONTROLLER_STATUS_DENIED);
    }
}

if ($mode == 'get_features') {
    list($product_features, $features_search) = fn_get_paginated_product_features($_REQUEST, $auth, array(), DESCR_SL);

    Tygh::$app['view']->assign('product_features', $product_features);
    Tygh::$app['view']->assign('features_search', $features_search);
    Tygh::$app['view']->assign('product_id', $_REQUEST['product_id']);
    if (!empty($_REQUEST['over'])) {
        Tygh::$app['view']->assign('over', $_REQUEST['over']);
    }
    if (!empty($_REQUEST['data_name'])) {
        Tygh::$app['view']->assign('data_name', $_REQUEST['data_name']);
    }


    if (!empty($_REQUEST['multiple'])) {
        Tygh::$app['view']->display('views/products/components/products_m_update_features.tpl');
    } else {
        Tygh::$app['view']->display('views/products/components/products_update_features.tpl');
    }

    if (!$_REQUEST['is_ajax']) {
        exit;
    }
}
