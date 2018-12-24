<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Mvc\View\Engine\Volt;

use UnitTester;

/**
 * Class ConvertEncodingCest
 */
class ConvertEncodingCest
{
    /**
     * Tests Phalcon\Mvc\View\Engine\Volt :: convertEncoding()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcViewEngineVoltConvertEncoding(UnitTester $I)
    {
        $I->wantToTest('Mvc\View\Engine\Volt - convertEncoding()');
        $I->skipTest('Need implementation');
    }
}