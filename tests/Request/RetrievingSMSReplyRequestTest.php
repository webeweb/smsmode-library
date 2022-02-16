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
     Tests setEndDate()
     *
     * @return void
     * @throws Exception Throws an exception.
     */
    public function testSetEndDate(): void {

        // Set a End date mock.
        $endDate = new DateTime();

        $obj = new RetrievingSMSReplyRequest();

        $obj->setEndDate($endDate);
        $this->assertSame($endDate, $obj->getEndDate());
    }

    /**
     Tests setStart()
     *
     * @return void
     */
    public function testSetStart(): void {

        $obj = new RetrievingSMSReplyRequest();

        $obj->setStart(0);
        $this->assertEquals(0, $obj->getStart());
    }

    /**
     Tests setStartDate()
     *
     * @return void
     * @throws Exception Throws an exception.
     */
    public function testSetStartDate(): void {

        // Set a Start date mock.
        $startDate = new DateTime();

        $obj = new RetrievingSMSReplyRequest();

        $obj->setStartDate($startDate);
        $this->assertSame($startDate, $obj->getStartDate());
    }

    /**
     Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/responseList.do", RetrievingSMSReplyRequest::RETRIEVING_SMS_REPLY_RESOURCE_PATH);

        $obj = new RetrievingSMSReplyRequest();

        $this->assertNull($obj->getEndDate());
        $this->assertNull($obj->getOffset());
        $this->assertEquals(RetrievingSMSReplyRequest::RETRIEVING_SMS_REPLY_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getStart());
        $this->assertNull($obj->getStartDate());
    }
}
