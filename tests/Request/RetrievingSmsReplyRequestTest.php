<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Request;

use DateTime;
use Throwable;
use WBW\Library\SmsMode\Request\RetrievingSmsReplyRequest;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Retrieving SMS reply request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Request
 */
class RetrievingSmsReplyRequestTest extends AbstractTestCase {

    /**
     * Test setEndDate()
     *
     * @return void
     * @throws Throwable Throws an exception.
     */
    public function testSetEndDate(): void {

        // Set a End date mock.
        $endDate = new DateTime();

        $obj = new RetrievingSmsReplyRequest();

        $obj->setEndDate($endDate);
        $this->assertSame($endDate, $obj->getEndDate());
    }

    /**
     * Test setStart()
     *
     * @return void
     */
    public function testSetStart(): void {

        $obj = new RetrievingSmsReplyRequest();

        $obj->setStart(0);
        $this->assertEquals(0, $obj->getStart());
    }

    /**
     * Test setStartDate()
     *
     * @return void
     * @throws Throwable Throws an exception.
     */
    public function testSetStartDate(): void {

        // Set a Start date mock.
        $startDate = new DateTime();

        $obj = new RetrievingSmsReplyRequest();

        $obj->setStartDate($startDate);
        $this->assertSame($startDate, $obj->getStartDate());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/responseList.do", RetrievingSmsReplyRequest::RETRIEVING_SMS_REPLY_RESOURCE_PATH);

        $obj = new RetrievingSmsReplyRequest();

        $this->assertNull($obj->getEndDate());
        $this->assertNull($obj->getOffset());
        $this->assertEquals(RetrievingSmsReplyRequest::RETRIEVING_SMS_REPLY_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getStart());
        $this->assertNull($obj->getStartDate());
    }
}
