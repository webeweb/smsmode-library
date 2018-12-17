<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use Exception;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\Request\SMSModeReceptionReportRequest;
use WBW\Library\SMSMode\Response\SMSModeReceptionReportResponse;
use WBW\Library\SMSMode\Tests\AbstractFrameworkTestCase;

/**
 * sMsmode reception report request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class SMSModeReceptionReportRequestTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SMSModeReceptionReportRequest();

        $this->assertEquals("compteRendu.do", $obj->getResourcePath());

        $this->assertNull($obj->getSmsID());
    }

    /**
     * Tests the parseResponse() method.
     *
     * @return void
     */
    public function testParseResponse() {

        $obj = new SMSModeReceptionReportRequest();

        $res = $obj->parseResponse("exception");
        $this->assertInstanceOf(SMSModeReceptionReportResponse::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new SMSModeReceptionReportRequest();

        // ===
        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"smsID\" is missing", $ex->getMessage());
        }

        // ===
        $obj->setSmsID("smsID");
        $res1 = ["smsID" => "smsID"];
        $this->assertEquals($res1, $obj->toArray());
    }

}
