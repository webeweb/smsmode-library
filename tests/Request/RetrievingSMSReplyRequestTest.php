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

use DateTime;
use Exception;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\RetrievingSMSReplyRequestInterface;
use WBW\Library\SMSMode\Request\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Retrieving SMS reply request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class RetrievingSMSReplyRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RetrievingSMSReplyRequest();

        $this->assertEquals(RetrievingSMSReplyRequestInterface::RETRIEVING_SMS_REPLY_RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getEndDate());
        $this->assertNull($obj->getOffset());
        $this->assertNull($obj->getStart());
        $this->assertNull($obj->getStartDate());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithStartAndEndDate() {

        $obj = new RetrievingSMSReplyRequest();

        try {

            $obj->setStartDate(new DateTime("2017-09-14 12:00:00"));
            $obj->toArray();
        } catch (Exception $ex) {
            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The optional parameter \"endDate\" is missing", $ex->getMessage());
        }

        try {

            $obj->setStartDate(null);
            $obj->setEndDate(new DateTime("2017-09-14 12:00:00"));
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The optional parameter \"startDate\" is missing", $ex->getMessage());
        }

        try {

            $obj->setStartDate(new DateTime("2017-09-14 12:00:00"));
            $obj->setEndDate(new DateTime("2017-09-14 12:00:00"));
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The \"endDate\" must be greater than \"startDate\"", $ex->getMessage());
        }

        $obj->setStartDate(new DateTime("2017-09-14 12:00:00"));
        $obj->setEndDate(new DateTime("2017-09-14 14:00:00"));

        $res = [
            "startDate" => "14092017-12:00",
            "endDate"   => "14092017-14:00",
        ];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithStartAndOffset() {

        $obj = new RetrievingSMSReplyRequest();

        try {

            $obj->setStart(0);
            $obj->setOffset(null);
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The optional parameter \"offset\" is missing", $ex->getMessage());
        }

        try {

            $obj->setStart(null);
            $obj->setOffset(0);
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The optional parameter \"start\" is missing", $ex->getMessage());
        }

        try {

            $obj->setStart(0);
            $obj->setOffset(0);
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The \"offset\" must be greater than \"start\"", $ex->getMessage());
        }

        $obj->setStart(0);
        $obj->setOffset(10);

        $res = [
            "start"  => 0,
            "offset" => 10,
        ];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     * @throws NullPointerException Throws a null pointer exception.
     * @throws IllegalArgumentException Throws an illegal argument exception.
     */
    public function testToArrayWithoutArguments() {

        $obj = new RetrievingSMSReplyRequest();

        $res = [];
        $this->assertEquals($res, $obj->toArray());
    }

}
