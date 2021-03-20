<?php
declare(strict_types=1);

namespace Monarobase\CountryList;

/**
 * This file is part of M-I-E-Systems\CountryList
 * Reference : CountryList by Momenoor <momen.noor@gmail.com>
 *
 * (c) 2015-2021 M.I.E Systems
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 *
 * @category    M-I-E-Systems
 * @package     CountryList
 * @copyright   (c) 2015-2021 M-I-E-Systems <momen.noor@gmail.com>
 * @link        https://MIE.Systems
 */

use Illuminate\Support\ServiceProvider;

/**
 * CountryListServiceProvider
 *
 * @author Momen Noor <momen.noor@gmail.com>
 */
class CountryListServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('countrylist', function ($app) {
            return new CountryList(base_path('vendor/umpirsky/country-list/data'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['countrylist'];
    }
}
