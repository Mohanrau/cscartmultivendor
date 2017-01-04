<?php
/**
 * Created by PhpStorm.
 * User: nguyenkim
 * Date: 1/3/17
 * Time: 1:39 PM
 */

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if (AREA != 'C') return;

fn_register_hooks(
    'init_company_data',
    'layout_get_default',
    'dispatch_before_send_response'
);