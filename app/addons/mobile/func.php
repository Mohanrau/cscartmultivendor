<?php
/**
 * Created by PhpStorm.
 * User: nguyenkim
 * Date: 1/3/17
 * Time: 1:37 PM
 */

use Tygh\Registry;
use Tygh\Embedded;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

/**
 * Detect and set the best layout for client
 *
 * @param $controller
 * @param $mode
 * @param $action
 * @param $dispatch_extra
 * @param $area
 */

define('stored_layout_cookie_key', 's_layout');

function fn_mobile_init_company_data($params, $company_id, $available_company_ids, $result) {

//    if ($_REQUEST['phone_app'] == 'Y') {
//        require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/Mobile-Detect-2.8.24/Mobile_Detect.php';
//        $detect = new Mobile_Detect();
//        if ($detect->isMobile() && !$detect->isTablet()) {
//            $_REQUEST['s_layout'] = Registry::get('addons.mobile.layout_for_phone_app');
//        } else {
//            $_REQUEST['s_layout'] = Registry::get('addons.mobile.layout_for_tablet_app');
//        }
//    }
}

/**
 * Ham xu ly hook layout_get_default trong file app/Tygh/BlockManager/Layout.php.
 * Ham nay se thay doi cach lay layout mac dinh de phu hop cho cac thiet bi mobile.
 *
 * @param $Layout
 * @param $theme_name
 * @param $condition
 */
function fn_mobile_layout_get_default($Layout, $theme_name, &$condition) {

    require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/Mobile-Detect-2.8.24/Mobile_Detect.php';
    $detect = new Mobile_Detect();

    if ($detect->isMobile() && !$detect->isTablet()) { // Request den tu trinh duyet tren phone
        $layout_name = Registry::get('addons.mobile.layout_for_phone');
    } elseif ($detect->isTablet()) {
        $layout_name = Registry::get('addons.mobile.layout_for_tablet');
    }

    if (empty($layout_name)) return;

    $new_condition = db_quote(" AND theme_name=?s AND name=?s",$theme_name,$layout_name); // Dieu kien de chon layout phu hop

    $layout =  db_get_row("SELECT * FROM ?:bm_layouts WHERE 1 ?p", $new_condition);

    if (empty($layout)) return; // Neu khong ton tai layout voi dieu kien moi thi thoat ra

    $condition = $new_condition; // Gan lai dieu kien chon layout cho ham goi hook

}

function fn_mobile_dispatch_before_send_response($status, $area, $controller, $mode, $action) {
//    $key_name = 'stored_layout' . (Embedded::isEnabled() ? '_embedded' : '');
//    $stored_layout = fn_get_session_data($key_name);
//
//    if (!empty($stored_layout)) {
//        fn_set_cookie(stored_layout_cookie_key, $stored_layout);
//    } else {
//        fn_set_cookie(stored_layout_cookie_key, null, -1);
//    }
}