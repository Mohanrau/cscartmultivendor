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

$schema = array(
    'gift_certificate' => array(
        'class' => '\Tygh\Addons\GiftCertificates\Documents\GiftCertificate\Variables\GiftCertificate',
        'arguments' => array('#context', '#config', '@formatter'),
        'attributes' => array(
            'gift_cert_id', 'company_id', 'gift_cert_code', 'sender', 'recipient', 'send_via', 'amount', 'email', 'message',
            'address', 'address_2', 'city', 'country', 'descr_country', 'state', 'descr_state', 'zipcode', 'phone',
            'products' => array(
                '[0..N]' => array(
                    'product_id', 'product_options', 'amount', 'product', 'product_options_value'
                )
            )
        )
    ),
    'company' => array(
        'class' => '\Tygh\Addons\GiftCertificates\Documents\GiftCertificate\Variables\CompanyVariable',
        'alias' => 'c',
        'email_separator' => '<br/>'
    ),
    'settings' => array(
        'class' => '\Tygh\Template\Document\Variables\SettingsVariable',
    ),
    'runtime' => array(
        'class' => '\Tygh\Template\Document\Variables\RuntimeVariable'
    )
);

return $schema;