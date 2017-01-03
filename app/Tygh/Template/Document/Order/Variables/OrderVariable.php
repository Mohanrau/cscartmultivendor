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


namespace Tygh\Template\Document\Order\Variables;


use Tygh\Registry;
use Tygh\Template\Document\Order\Context;
use Tygh\Template\Document\Variables\GenericVariable;
use Tygh\Tools\Formatter;

/**
 * The class of the `order` variable; it allows access to order data in the document editor.
 *
 * @package Tygh\Template\Document\Order\Variables
 */
class OrderVariable extends GenericVariable
{
    /**
     * OrderVariable constructor.
     *
     * @param Context   $context    Instance of context.
     * @param array     $config     Config data.
     * @param Formatter $formatter  Instance of formatter.
     */
    public function __construct(Context $context, array $config, Formatter $formatter)
    {
        $order = $context->getOrder();
        $config['data'] = $order->data;
        parent::__construct($context, $config);

        $coupon_code_separator = isset($config['coupon_code_separator']) ? $config['coupon_code_separator'] : '<br/>';
        $tax_separator = isset($config['tax_separator']) ? $config['tax_separator'] : '<br/>';

        $this->data['tax_name'] = '';
        $this->data['tax_total'] = '';
        $this->data['coupon_code'] = '';
        $this->data['tracking_number'] = '';
        $this->data['shippings_method'] = '';
        $this->data['tax_exempt_text'] = '';
        $this->data['timestamp'] = $formatter->asDatetime($this->data['timestamp']);
        $this->data['notes'] = $formatter->asNText($this->data['notes']);
        $this->data['display_subtotal'] = $formatter->asPrice($this->data['display_subtotal']);
        $this->data['discount'] = $formatter->asPrice($this->data['discount']);
        $this->data['subtotal_discount'] = $formatter->asPrice($this->data['subtotal_discount']);
        $this->data['payment_surcharge'] = $formatter->asPrice($this->data['payment_surcharge']);
        $this->data['display_shipping_cost'] = $formatter->asPrice($this->data['display_shipping_cost']);
        $this->data['total'] = $formatter->asPrice($this->data['total']);

        if (!empty($this->data['coupons'])) {
            $coupons = array();
            foreach ($this->data['coupons'] as $coupon_code => $coupon) {
                $coupons[] = $coupon_code;
            }
            $this->data['coupon_code'] = implode($coupon_code_separator, $coupons);
        }

        if (!empty($this->data['taxes'])) {
            $tax_names = $tax_totals = array();
            foreach ($this->data['taxes'] as $tax) {
                $name = $tax['description'] . '&nbsp;';
                if ($tax['rate_type'] == 'F') {
                    $name .= $formatter->asPrice(abs($tax['rate_value']));
                } else {
                    $name .= abs($tax['rate_value']) . '%';
                }
                if (
                    $tax['price_includes_tax'] == 'Y'
                    && (
                        Registry::get('settings.Appearance.cart_prices_w_taxes') != 'Y'
                        || Registry::get('settings.General.tax_calculation') == 'subtotal'
                    )
                ) {
                    $name .= '&nbsp;' . __('included', array(), $context->getLangCode());
                }
                $tax_names[] = $name;
                $tax_totals[] = $formatter->asPrice($tax['tax_subtotal']);
            }
            $this->data['tax_name'] = implode($tax_separator, $tax_names);
            $this->data['tax_total'] = implode($tax_separator, $tax_totals);
        }

        $shippings = $order->getShippings();
        $shipments = $order->getShipments();
        
        if (!empty($shippings)) {
            $shippings_method = array();
            $tracking_number = array();

            foreach ($shippings as $shipping) {
                if (isset($shipping['shipping'])) {
                    $shippings_method[] = $shipping['shipping'];
                }

                if (isset($shipping['group_key']) && !empty($shipments[$shipping['group_key']])) {
                    $shipping_info = $shipments[$shipping['group_key']];
                    $tracking = $shipping_info['tracking_number'];
                    if (!empty($shipping_info['carrier_info']['tracking_url'])) {
                        $tracking = sprintf('<a href="%s">%s</a>',
                            $shipping_info['carrier_info']['tracking_url'],
                            $tracking
                        );
                    }
                    if (!empty($shipping_info['carrier_info']['info'])) {
                        $tracking .= ' ' . $shipping_info['carrier_info']['info'];
                    }

                    $tracking_number[] = $tracking;
                }
            }

            $this->data['shippings_method'] = implode(', ', array_filter($shippings_method));
            $this->data['tracking_number'] = implode(', ', $tracking_number);
        }

        if (!empty($this->data['tax_exempt']) && $this->data['tax_exempt'] == 'Y') {
            $this->data['tax_exempt_text'] = __('tax_exempt', array(), $context->getLangCode());
        }

        // Invoice header and invoice id text
        $this->data['invoice_header'] = __('invoice', array(), $context->getLangCode());
        $this->data['invoice_id_text'] = __('order', array(), $context->getLangCode()) . '&nbsp;#' . $order->getId();
        $status_data = $order->getStatusData($context->getLangCode());
        if (!empty($status_data['params']['appearance_type'])) {
            if ($status_data['params']['appearance_type'] == 'O') {
                $this->data['invoice_header'] = __('order_details', array(), $context->getLangCode());
            } elseif (!empty($this->data['doc_ids'][$status_data['params']['appearance_type']])) {
                $doc_id = $this->data['doc_ids'][$status_data['params']['appearance_type']];
                if ($status_data['params']['appearance_type'] == 'I') {
                    $this->data['invoice_id_text'] = __('invoice', array(), $context->getLangCode()) . ' #' . $doc_id . '<br/>' . $this->data['invoice_id_text'];
                } elseif ($status_data['params']['appearance_type'] == 'C') {
                    $this->data['invoice_header'] = __('credit_memo', array(), $context->getLangCode());
                    $this->data['invoice_id_text'] = __('credit_memo', array(), $context->getLangCode()) . ' #' . $doc_id . '<br/>' . $this->data['invoice_id_text'];
                }
            }
        }

        $this->data['status'] = $status_data;
    }
}