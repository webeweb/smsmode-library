<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use DateTime;
use Exception;
use UnexpectedValueException;
use WBW\Library\SMSMode\Model\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Retrieving SMS reply request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class RetrievingSMSReplyRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RetrievingSMSReplyRequest();

        $this->assertNull($obj->getEndDate());
        $this->assertNull($obj->getOffset());
        $this->assertNull($obj->getStart());
        $this->assertNull($obj->getStartDate());
    }

    /**
     * Tests the setEndDate() method.
     *
     * @return void
     * @throws Exception Throws an exception.
     */
    public function testSetEndDate() {

        // Set a End date mock.
        $endDate = new DateTime();

        $obj = new RetrievingSMSReplyRequest();

        $obj->setEndDate($endDate);
        $this->assertSame($endDate, $obj->getEndDate());
    }

    /**
     * Tests the setOffset() method.
     *
     * @return void
     * @throws Exception Throws an exception.
     */
    public function testSetOffset() {

        $obj = new RetrievingSMSReplyRequest();

        $obj->setOffset(1);
        $this->assertEquals(1, $obj->getOffset());
    }

    /**
     * Tests the setOffset() method.
     *
     * @return void
     */
    public function testSetOffsetWithUnexpectedValueException() {

        $obj = new RetrievingSMSReplyRequest();

        try {

            $obj->setOffset(0);
        } catch (Exception $ex) {

            $this->assertInstanceOf(UnexpectedValueException::class, $ex);
            $this->assertEquals("The \"offset\" must be greater than 0", $ex->getMessage());
        }
    }

    /**
     * Tests the setStart() method.
     *
     * @return void
     */
    public function testSetStart() {

        $obj = new RetrievingSMSReplyRequest();

        $obj->setStart(0);
        $this->assertEquals(0, $obj->getStart());
    }

    /**
     * Tests the setStartDate() method.
     *
     * @return void
     * @throws Exception Throws an exception.
     */
    public function testSetStartDate() {

        // Set a Start date mock.
        $startDate = new DateTime();

        $obj = new RetrievingSMSReplyRequest();

        $obj->setStartDate($startDate);
        $this->assertSame($startDate, $obj->getStartDate());
    }
}
