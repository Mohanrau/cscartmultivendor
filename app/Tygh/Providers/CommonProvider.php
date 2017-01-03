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

namespace Tygh\Providers;


use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Tygh\Languages\Languages;
use Tygh\Registry;
use Tygh\Tools\Formatter;

/**
 * The provider class that registers common components.
 *
 * @package Tygh\Providers
 */
class CommonProvider implements ServiceProviderInterface
{
    /**
     * @inheritDoc
     */
    public function register(Container $app)
    {
        $app['languages'] = function ($app) {
            return Languages::getAll();
        };

        $app['formatter'] = function ($app) {
            return new Formatter(Registry::get('settings'));
        };
    }
}