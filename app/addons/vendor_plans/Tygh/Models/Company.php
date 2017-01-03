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

namespace Tygh\Models;

use Tygh\Registry;
use Tygh\Models\Components\AModel;
use Tygh\Models\Components\Relation;

class Company extends AModel
{
    public function getTableName()
    {
        return '?:companies';
    }

    public function getPrimaryField()
    {
        return 'company_id';
    }

    public function getDescriptionTableName()
    {
        return '?:company_descriptions';
    }

    public function getFields($params)
    {
        return array(
            '?:company_descriptions.*',
            '?:companies.*',
            'p.price',
            'p.periodicity',
            'p.commission',
            'p.products_limit',
            'p.revenue_limit',
            'p.vendor_store',
            'p.categories',
        );
    }

    public function getJoins($params)
    {
        $joins = parent::getJoins($params);

        $joins[] = db_quote(" LEFT JOIN ?:vendor_plans p ON p.plan_id = ?:companies.plan_id");

        return $joins;
    }

    public function getSearchFields()
    {
        return array(
            'in' => array(
                'plan_id' => '?:companies.plan_id',
                'status' => '?:companies.status',
            ),
            'text' => array(
                'company',
            ),
        );
    }

    public function getRelations()
    {
        return array(
            'plan' => array(Relation::HAS_ONE, 'Tygh\Models\VendorPlan', 'plan_id'),
        );
    }

    public function gatherAdditionalItemsData(&$items, $params)
    {
        foreach ($items as $key => $item) {
            $items[$key]['category_ids'] = !empty($item['categories']) ? explode(',', $item['categories']) : array();
        }

        /**
         * Process selected companies data
         *
         * @param object $instance Current model instance
         * @param array  $items    Items
         * @param array  $params   Params array
         */
        fn_set_hook('plans_companies_get_list_post', $this, $items, $params);
    }

    /**
     * Plan payment
     * @param int    $time          Transaction time
     * @param string $label_langvar Lable langvar
     */
    public function payment($time = TIME)
    {
        if ($plan = $this->plan) {
            if ($price = floatval($plan->price)) {
                $payout_id = db_query('INSERT INTO ?:vendor_payouts ?e', array(
                    'company_id'     => $this->company_id,
                    'payout_date'    => $time,
                    'start_date'     => $time,
                    'end_date'       => $time,
                    'payout_amount'  => $price * (-1),
                    'payment_method' => __('vendor_plans.plan') . ': ' . $plan->plan,
                    'plan_id'        => $plan->plan_id
                ));

                /**
                 * Company payout
                 *
                 * @param object $instance  Current model instance
                 * @param int    $payout_id Payout ID
                 * @param float  $price     Price
                 * @param int    $time      Unix timestamp
                 */
                fn_set_hook('plans_companies_get_list_post', $this, $payout_id, $price, $time);

                /** @var \Tygh\Mailer\Mailer $mailer */
                $mailer = \Tygh::$app['mailer'];

                $mailer->send(array(
                    'to' => 'company_support_department',
                    'from' => 'default_company_support_department',
                    'data' => array(
                        'vendor' => $this,
                        'plan' => $this->plan,
                        'url' => fn_url('companies.balance', 'V', 'http')
                    ),
                    'template_code' => 'vendor_plans_payment',
                    'tpl' => 'addons/vendor_plans/companies/payment.tpl',
                    'company_id' => $this->company_id,
                ), 'A', $this->lang_code);

                return $payout_id;
            }
        }
    }

    /**
     * Getting instance of current company (based on runtime.company_id)
     * @return mixed IModel or false
     */
    public static function current()
    {
        if ($company_id = Registry::get('runtime.company_id')) {
            return self::model()->find($company_id);
        }

        return false;
    }

    public static function periodicityPayments()
    {
        $plan_ids = VendorPlan::model()->findMany(array(
            'periodicity' => array('month', 'year'),
            'price_from' => 0.01,
            'get_ids' => true,
        ));
        if ($plan_ids) {
            $companies = self::model()->findMany(array(
                'plan_id' => $plan_ids,
                'status' => 'A',
            ));
            if ($companies) {
                foreach ($companies as $company) {
                    $datetime = new \DateTime('today');
                    $date = $datetime->modify('-1 ' . $company->periodicity);

                    $payout_exists = db_get_row(
                        "SELECT * FROM ?:vendor_payouts WHERE company_id = ?i AND plan_id = ?i AND end_date > ?i"
                        . " ORDER BY payout_id DESC LIMIT 1",
                        $company->company_id, $company->plan_id, $date->getTimestamp()
                    );
                    if (!$payout_exists) {
                        $last_payout_time = db_get_field(
                            "SELECT end_date FROM ?:vendor_payouts WHERE company_id = ?i AND plan_id = ?i"
                            . " ORDER BY payout_id DESC LIMIT 1",
                            $company->company_id, $company->plan_id
                        );
                        if ($last_payout_time) {
                            $datetime = new \DateTime;
                            $last_payout_time = $datetime
                                ->setTimestamp($last_payout_time)
                                ->modify('+1 ' . $company->periodicity)
                                ->getTimestamp();
                        }

                        $company->payment($last_payout_time ?: TIME);
                    }
                }
            }
        }
    }

    /**
     * Getting current products count
     * @return int
     */
    public function getCurrentProducts()
    {
        $products = db_get_field("SELECT count(product_id) FROM ?:products WHERE company_id = ?i", $this->company_id);

        /**
         * Getting current company products
         *
         * @param object $instance Current model instance
         * @param int    $products Products count
         */
        fn_set_hook('plans_companies_get_list_post', $this, $products);

        return intval($products);
    }

    /**
     * Can vendor add product
     * @param  bool $notify Notify flag
     * @return bool
     */
    public function canAddProduct($notify = false)
    {
        if ($this->products_limit) {
            $can = $this->products_limit > $this->getCurrentProducts();

            /**
             * Can company add product
             *
             * @param object $instance Current model instance
             * @param bool   $notify   Notify flag
             * @param bool   $can      Can add product flag
             */
            fn_set_hook('plans_companies_get_list_post', $this, $notify, $can);

            if (!$can && $notify) {
                fn_set_notification('E', __('error'), __('vendor_plans.products_exceeded_text', array(
                    '[href]' => fn_url(
                        sprintf('companies.update?company_id=%s&selected_section=plan', $this->company_id)
                    ),
                )));
            }

            return $can;
        }

        return true;
    }

    /**
     * Getting current month revenue
     *
     * @return float
     */
    public function getCurrentRevenue()
    {
        $revenue = 0;
            
        $today = getdate(TIME);
        $time_from = mktime(0, 0, 0, $today['mon'], 1, $today['year']);
        $time_to = TIME;
        $statuses = fn_get_order_payout_statuses();
        
        if ($statuses) {
            $revenue = db_get_field(
                "SELECT SUM(order_amount) - SUM(commission_amount)"
                . " FROM ?:vendor_payouts p"
                . " JOIN ?:orders o USING(order_id)"
                . " WHERE p.company_id = ?i"
                  . " AND p.end_date >= ?i"
                  . " AND p.end_date <= ?i"
                  . " AND o.status IN (?a)"
                , $this->company_id, $time_from, $time_to, $statuses
            );
        }

        /**
         * Getting current company revenue
         *
         * @param object $instance  Current model instance
         * @param float  $revenue   Revenue
         * @param int    $today     Today unix timestamp
         * @param int    $time_from Time from unix timestamp
         * @param int    $time_to   Time to unix timestamp
         * @param array  $statuses  Order payout statuses
         */
        fn_set_hook('plans_companies_get_list_post', $this, $revenue, $today, $time_from, $time_to, $statuses);

        return floatval($revenue);
    }

    /**
     * Can vendor get revenue
     *
     * @param  bool $notify Notify flag
     * @return bool
     */
    public function canGetRevenue($notify = false)
    {
        if (floatval($this->revenue_limit)) {
            $can = $this->revenue_limit > $this->getCurrentRevenue();

            /**
             * Can vendor get revenue
             *
             * @param object $instance Current model instance
             * @param bool   $notify   Notify flag
             * @param bool   $can      Can add product flag
             */
            fn_set_hook('plans_companies_get_list_post', $this, $notify, $can);

            if (!$can && $notify) {
                if (
                    fn_is_expired_storage_data('vendor_plans_last_revenue_notify_' . $this->company_id, SECONDS_IN_DAY)
                ) {
                    /** @var \Tygh\Mailer\Mailer $mailer */
                    $mailer = \Tygh::$app['mailer'];

                    $mailer->send(array(
                        'to' => 'company_support_department',
                        'from' => 'default_company_support_department',
                        'data' => array(
                            'company' => $this,
                            'company_url' => fn_url('companies.update?company_id=' . $this->company_id, 'A', 'http', CART_LANGUAGE),
                            'plan' => $this->plan,
                        ),
                        'template_code' => 'vendor_plans_revenue',
                        'tpl' => 'addons/vendor_plans/limits/revenue.tpl',
                    ), 'A', CART_LANGUAGE);

                    $lang_code = fn_get_company_language($this->company_id);

                    $mailer->send(array(
                        'to' => 'company_support_department',
                        'from' => 'default_company_support_department',
                        'data' => array(
                            'company' => $this,
                            'company_url' => fn_url('companies.update?company_id=' . $this->company_id, 'V', 'http', $lang_code),
                            'plan' => $this->plan,
                        ),
                        'template_code' => 'vendor_plans_revenue',
                        'tpl' => 'addons/vendor_plans/limits/revenue.tpl',
                        'company_id' => $this->company_id,
                    ), 'A', $lang_code);
                }
            }

            return $can;
        }

        return true;
    }

}
