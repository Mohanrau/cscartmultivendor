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

if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
    'get_companies',
    'get_company_data',
    'update_company_pre',
    'update_company',
    'change_company_status_before_mail',
    'delete_category_after',
    'mve_place_order',
    'mve_place_order_post',
    'mve_companies_get_payouts',
    'get_categories',
    'get_categories_after_sql',
    'get_category_data',
    'take_payment_surcharge',
    'set_admin_notification',
    'dispatch_before_display',
    'update_product_pre'
);
