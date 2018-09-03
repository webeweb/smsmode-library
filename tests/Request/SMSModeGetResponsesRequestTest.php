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

use DateTime;
use Exception;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\Request\SMSModeGetResponsesRequest;
use WBW\Library\SMSMode\Response\SMSModeGetResponsesResponse;
use WBW\Library\SMSMode\Tests\Cases\AbstractSMSModeFrameworkTestCase;

/**
 * sMsmode get responses request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 * @final
 */
final class SMSModeGetResponsesRequestTest extends AbstractSMSModeFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SMSModeGetResponsesRequest();

        $this->assertEquals("responseList.do", $obj->getResourcePath());

        $this->assertNull($obj->getEndDate());
        $this->assertNull($obj->getOffset());
        $this->assertNull($obj->getStart());
        $this->assertNull($obj->getStartDate());
    }

    /**
     * Tests the parseResponse() method.
     *
     * @return void
     */
    public function testParseResponse() {

        $obj = new SMSModeGetResponsesRequest();

        $res = $obj->parseResponse("exception");
        $this->assertInstanceOf(SMSModeGetResponsesResponse::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new SMSModeGetResponsesRequest();

        // ===
        $res1 = [];
        $this->assertEquals($res1, $obj->toArray());

        // ===
        try {

            $obj->setStart(0);
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"offset\" is missing", $ex->getMessage());
        }

        // ===
        try {

            $obj->setStart(null);
            $obj->setOffset(0);
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"start\" is missing", $ex->getMessage());
        }

        // ===
        try {

            $obj->setStart(0);
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The offset must be greater than start", $ex->getMessage());
        }
        // ===

        $obj->setOffset(10);
        $res2 = ["start" => 0, "offset" => 10];
        $this->assertEquals($res2, $obj->toArray());

        // ===
        try {

            $obj->setStart(null);
            $obj->setOffset(null);
            $obj->setStartDate(new DateTime("2017-09-14 12:00:00"));
            $obj->toArray();
        } catch (Exception $ex) {
            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"endDate\" is missing", $ex->getMessage());
        }

        // ===
        try {

            $obj->setEndDate(new DateTime("2017-09-14 12:00:00"));
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The endDate must be greater than startDate", $ex->getMessage());
        }

        // ===
        try {

            $obj->setStartDate(null);
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"startDate\" is missing", $ex->getMessage());
        }

        // ===
        $obj->setStartDate(new DateTime("2017-09-14 12:00:00"));
        $obj->setEndDate(new DateTime("2017-09-14 14:00:00"));
        $res3 = ["startDate" => "14092017-12:00", "endDate" => "14092017-14:00"];
        $this->assertEquals($res3, $obj->toArray());
    }

}
