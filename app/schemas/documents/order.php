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


return array(
    'order' => array(
        'class' => '\Tygh\Template\Document\Order\Variables\OrderVariable',
        'arguments' => array('#context', '#config', '@formatter'),
        'alias' => 'o',
        'attributes' => array(
            'order_id', 'company_id', 'issuer_id', 'user_id', 'tracking_number', 'shippings_method',
            'total', 'subtotal', 'discount', 'subtotal_discount', 'payment_surcharge',
            'display_subtotal', 'shipping_cost', 'timestamp', 'notes', 'details', 'company', 'payment_id',
            'tax_exempt', 'tax_name', 'tax_total', 'lang_code', 'ip_address', 'tax_exempt_text', 'tax_name', 'tax_total',
            'tax_subtotal', 'display_shipping_cost', 'secondary_currency', 'coupon_code', 'invoice_header', 'invoice_id_text',
            'products' => array(
                '[0..N]' => array(
                    'item_id', 'product_id', 'product_code', 'price', 'amount', 'product', 'product_status',
                    'discount', 'base_price', 'original_price', 'cart_id', 'tax_value', 'subtotal', 'display_subtotal'
                )
            ),
            'taxes' => array(
                '[0..N]' => array(
                    'rate_type', 'rate_value', 'price_includes_tax', 'regnumber', 'tax_subtotal', 'description'
                )
            ),
            'shipping' => array(
                '[0..N]' => array(
                    'shipping_id', 'shipping', 'delivery_time', 'rate_calculation', 'destination',
                    'min_weight', 'max_weight', 'service_code', 'module', 'rate', 'group_name'
                )
            ),
            'product_groups' => array(
                '[0..N]' => array(
                    'name', 'company_id',
                    'products' => array(
                        '[0..N]' => array(
                            'item_id', 'product_id', 'product_code', 'price', 'amount', 'product', 'product_status',
                            'discount', 'base_price', 'original_price', 'cart_id', 'tax_value', 'subtotal', 'display_subtotal'
                        )
                    ),
                    'package_info' => array(
                        'shipping_freight',
                        'origination' => array(
                            'name', 'address', 'city', 'country', 'state', 'zipcode', 'phone', 'fax'
                        )
                    ),
                    'free_shipping'
                )
            ),
            'status' => array(
                'description', 'type', 'status', 'status_id', 'params' => array(
                    'allow_return', 'repay', 'notify', 'inventory', 'color', 'appearance_type'
                )
            )
        )
    ),
    'company' => array(
        'class' => '\Tygh\Template\Document\Order\Variables\CompanyVariable',
        'alias' => 'c',
        'email_separator' => '<br/>'
    ),
    'user' => array(
        'class' => '\Tygh\Template\Document\Variables\GenericVariable',
        'alias' => 'u',
        'data' => function (\Tygh\Template\Document\Order\Context $context) {
            return $context->getOrder()->getUser();
        },
        'attributes' => function () {
            $attributes = array('email');
            $group_fields = fn_get_profile_fields('I');
            $sections = array('C', 'B', 'S');

            foreach ($sections as $section) {
                if (isset($group_fields[$section])) {
                    foreach ($group_fields[$section] as $field) {
                        if (!empty($field['field_name'])) {
                            $attributes[] = $field['field_name'];

                            if (in_array($field['field_type'], array('A', 'O', 'L'))) {
                                $attributes[] = $field['field_name'] . '_descr';
                            }
                        }
                    }
                }

                $attributes[strtolower($section) . '_fields']['[0..N]'] = array(
                    'name', 'value'
                );
            }

            return $attributes;
        }
    ),
    'payment' => array(
        'class' => '\Tygh\Template\Document\Variables\GenericVariable',
        'alias' => 'p',
        'data' => function (\Tygh\Template\Document\Order\Context $context) {
            $payment = $context->getOrder()->getPayment();

            if (empty($payment['surcharge_title'])) {
                $payment['surcharge_title'] = __('payment_surcharge', array(), $context->getLangCode());
            }

            return $payment;
        },
        'attributes' => array(
            'payment_id', 'payment', 'description', 'payment_category', 'surcharge_title', 'instructions',
            'status', 'a_surcharge', 'p_surcharge', 'processor', 'processor_type', 'processor_status'
        )
    ),
    'settings' => array(
        'class' => '\Tygh\Template\Document\Variables\SettingsVariable',
    ),
    'runtime' => array(
        'class' => '\Tygh\Template\Document\Variables\RuntimeVariable'
    )
);