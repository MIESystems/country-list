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

class CountryNotFoundException extends \Exception
{
    /**
     * Constructor.
     *
     * @param string $countryCode  A 2-letter country code
     */
    public function __construct($countryCode)
    {
        parent::__construct('Country "' . $countryCode . '" not found.');
    }
}
