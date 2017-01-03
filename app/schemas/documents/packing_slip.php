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

$schema = fn_get_schema('documents', 'order');

$schema['order']['class'] = '\Tygh\Template\Document\PackingSlip\Variables\OrderVariable';
$schema['order']['attributes']['shipment'] = array(
    'shipment_id', 'shipment_timestamp', 'comments', 'status', 'order_id', 'order_timestamp',
    's_firstname', 's_lastname', 'company', 'user_id', 'shipping_id', 'shipping', 'tracking_number',
    'carrier', 'carrier_info' => array(
        'name', 'tracking_url'
    )
);

return $schema;