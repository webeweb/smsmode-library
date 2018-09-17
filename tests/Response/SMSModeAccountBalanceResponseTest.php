<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Response;

use WBW\Library\SMSMode\Response\SMSModeAccountBalanceResponse;
use WBW\Library\SMSMode\Tests\AbstractSMSModeFrameworkTestCase;

/**
 * sMsmode account balance response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 * @final
 */
final class SMSModeAccountBalanceResponseTest extends AbstractSMSModeFrameworkTestCase {

    /**
     * Tests the parse() method.
     *
     * @return void
     */
    public function testParse() {

        $objEx = new SMSModeAccountBalanceResponse("exception");

        $this->assertNull($objEx->getCode());
        $this->assertNull($objEx->getDescription());
        $this->assertNull($objEx->getAccountBalance());

        $obj = new SMSModeAccountBalanceResponse("212.5");

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals(212.5, $obj->getAccountBalance());
    }

}
