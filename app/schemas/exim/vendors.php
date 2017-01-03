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

include_once(Registry::get('config.dir.schemas') . 'exim/vendors.functions.php');

$schema = array(
    'section' => 'vendors',
    'pattern_id' => 'vendors',
    'name' => __('vendors'),
    'key' => array('company_id'),
    'order' => 0,
    'table' => 'companies',
    'permissions' => array(
        'edition' => 'MULTIVENDOR',
        'import' => 'manage_vendors',
        'export' => 'view_vendors',
    ),
    'references' => array(
        'company_descriptions' => array(
            'reference_fields' => array('company_id' => '#key', 'lang_code' => '#lang_code'),
            'join_type' => 'LEFT'
        )
    ),
    'options' => array(
        'lang_code' => array(
            'title' => 'language',
            'type' => 'languages',
            'default_value' => array(DEFAULT_LANGUAGE),
        ),
        'images_path' => array(
            'title' => 'images_directory',
            'description' => 'text_images_directory',
            'type' => 'input',
            'default_value' => 'exim/backup/images/',
            'notes' => __('text_file_editor_notice', array('[href]' => fn_url('file_editor.manage?path=/'))),
        ),
    ),
    'range_options' => array(
        'selector_url' => 'companies.manage',
        'object_name' => __('vendors'),
    ),
    'import_process_data' => array(
        'import_status' => array(
            'function' => 'fn_exim_vendors_import_status',
            'args' => array('$object'),
            'import_only' => true,
        ),
    ),
    'export_fields' => array(
        'Vendor name' => array(
            'db_field' => 'company',
            'required' => true,
        ),
        'Vendor language' => array(
            'required' => true,
            'process_get' => array('fn_exim_vendors_export_language', '#key'),
            'process_put' => array('fn_exim_vendors_import_language', '%E-mail%', '#this'),
            'linked' => false
        ),
        'Status' => array(
            'db_field' => 'status',
        ),
        'Language' => array(
            'table' => 'company_descriptions',
            'db_field' => 'lang_code',
            'type' => 'languages',
            'multilang' => true,
            'required' => true,
        ),
        'Description' => array(
            'table' => 'company_descriptions',
            'db_field' => 'company_description',
            'multilang' => true,
        ),
        'E-mail' => array(
            'db_field' => 'email',
            'required' => true,
            'alt_key' => true,
        ),
        'Phone' => array(
            'db_field' => 'phone',
            'required' => true,
        ),
        'Url' => array(
            'db_field' => 'url',
        ),
        'Fax' => array(
            'db_field' => 'fax',
        ),
        'Address' => array(
            'db_field' => 'address',
            'required' => true,
        ),
        'City' => array(
            'db_field' => 'city',
            'required' => true,
        ),
        'Country' => array(
            'db_field' => 'country',
            'required' => true,
        ),
        'State' => array(
            'db_field' => 'state',
            'required' => true,
        ),
        'Zipcode' => array(
            'db_field' => 'zipcode',
            'required' => true,
        ),
        'Shippings' => array(
            'db_field' => 'shippings',
        ),
        'Logo for the customer area' => array(
            'process_get' => array('fn_exim_vendors_export_logo', '#key', 'theme', '@images_path'),
            'process_put' => array('fn_exim_vendors_import_logo', '%E-mail%', 'theme', '#this'),
            'linked' => false,
        ),
        'Logo for invoices' => array(
            'process_get' => array('fn_exim_vendors_export_logo', '#key', 'mail', '@images_path'),
            'process_put' => array('fn_exim_vendors_import_logo', '%E-mail%', 'mail', '#this'),
            'linked' => false,
        ),
    ),
);

return $schema;
