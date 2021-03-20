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

use Illuminate\Support\Facades\Facade;

/**
 * CountryListFacade
 *
 * @author Momen Noor <momen.noor@gmail.com>
 *
 * @method static string getDataDir()
 * @method static string getOne(string $countryCode, string $locale = 'en')
 * @method static array getList(string $locale = 'en', string $format = 'php')
 * @method static CountryList setList(string $locale, array $data)
 * @method static bool has(string $countryCode, string $locale = 'en')
 */
class CountryListFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return CountryList::class;
    }
}
