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
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\Request\SMSModeGetResponsesRequest;
use WBW\Library\SMSMode\Response\SMSModeGetResponsesResponse;

/**
 * sMsmode get responses request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 * @final
 */
final class SMSModeGetResponsesRequestTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new SMSModeGetResponsesRequest();

        $this->assertEquals("responseList.do", $obj->getResourcePath());

        $this->assertEquals(null, $obj->getEndDate());
        $this->assertEquals(null, $obj->getOffset());
        $this->assertEquals(null, $obj->getStart());
        $this->assertEquals(null, $obj->getStartDate());
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

        $res1 = [];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setStart(0);
        try {
            $obj->toArray();
        } catch (Exception $ex) {
            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The parameter \"offset\" is missing", $ex->getMessage());
        }

        $obj->setStart(null);
        $obj->setOffset(0);
        try {
            $obj->toArray();
        } catch (Exception $ex) {
            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The parameter \"start\" is missing", $ex->getMessage());
        }

        $obj->setStart(0);
        try {
            $obj->toArray();
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The offset must be greater than start", $ex->getMessage());
        }

        $obj->setOffset(10);
        $res2 = ["start" => 0, "offset" => 10];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setStart(null);
        $obj->setOffset(null);
        $obj->setStartDate(new DateTime("2017-09-14 12:00:00"));
        try {
            $obj->toArray();
        } catch (Exception $ex) {
            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The parameter \"endDate\" is missing", $ex->getMessage());
        }

        $obj->setEndDate(new DateTime("2017-09-14 12:00:00"));
        try {
            $obj->toArray();
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The end date must be greater than start date", $ex->getMessage());
        }

        $obj->setStartDate(null);
        try {
            $obj->toArray();
        } catch (Exception $ex) {
            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The parameter \"startDate\" is missing", $ex->getMessage());
        }

        $obj->setStartDate(new DateTime("2017-09-14 12:00:00"));
        $obj->setEndDate(new DateTime("2017-09-14 14:00:00"));
        $res3 = ["startDate" => "14092017-12:00", "endDate" => "14092017-14:00"];
        $this->assertEquals($res3, $obj->toArray());
    }

}
