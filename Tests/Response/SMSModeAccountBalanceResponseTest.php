<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Response;

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Response\SMSModeAccountBalanceResponse;

/**
 * sMsmode account balance response test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 * @final
 */
final class SMSModeAccountBalanceResponseTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the parse() method.
     *
     * @return void
     */
    public function testParse() {

        $objEx = new SMSModeAccountBalanceResponse("exception");

        $this->assertEquals(null, $objEx->getCode());
        $this->assertEquals(null, $objEx->getDescription());
        $this->assertEquals(null, $objEx->getAccountBalance());

        $obj = new SMSModeAccountBalanceResponse("212.5");

        $this->assertEquals(null, $obj->getCode());
        $this->assertEquals(null, $obj->getDescription());
        $this->assertEquals(212.5, $obj->getAccountBalance());
    }

}
