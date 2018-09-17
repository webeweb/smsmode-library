<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use WBW\Library\SMSMode\Request\SMSModeAccountBalanceRequest;
use WBW\Library\SMSMode\Response\SMSModeAccountBalanceResponse;
use WBW\Library\SMSMode\Tests\AbstractSMSModeFrameworkTestCase;

/**
 * sMsmode account balance request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 * @final
 */
final class SMSModeAccountBalanceRequestTest extends AbstractSMSModeFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SMSModeAccountBalanceRequest();

        $this->assertEquals("credit.do", $obj->getResourcePath());
    }

    /**
     * Tests the parseResponse() method.
     *
     * @return void
     */
    public function testParseResponse() {

        $obj = new SMSModeAccountBalanceRequest();

        $res = $obj->parseResponse("exception");
        $this->assertInstanceOf(SMSModeAccountBalanceResponse::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new SMSModeAccountBalanceRequest();

        $this->assertEquals([], $obj->toArray());
    }

}
