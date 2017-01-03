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

$schema['Google size'] = array(
    'option_field' => 'Y',
    'process_get' => array('fn_google_get_product_options', '#key', '#field', '#lang_code', '$lang_code'),
    'multilang' => true,
    'linked' => false
);

$schema['Google color'] = array(
    'option_field' => 'Y',
    'process_get' => array('fn_google_get_product_options', '#key', '#field', '#lang_code', '$lang_code'),
    'multilang' => true,
    'linked' => false
);

$schema['Google pattern'] = array(
    'option_field' => 'Y',
    'process_get' => array('fn_google_get_product_options', '#key', '#field', '#lang_code', '$lang_code'),
    'multilang' => true,
    'linked' => false
);

$schema['Google material'] = array(
    'option_field' => 'Y',
    'process_get' => array('fn_google_get_product_options', '#key', '#field', '#lang_code', '$lang_code'),
    'multilang' => true,
    'linked' => false
);

return $schema;
