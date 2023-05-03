<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Request;

use WBW\Library\SmsMode\Request\CheckingSmsMessageStatusRequest;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Checking SMS message status request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Request
 */
class CheckingSmsMessageStatusRequestTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/smsStatus.do", CheckingSmsMessageStatusRequest::CHECKING_SMS_MESSAGE_STATUS_RESOURCE_PATH);

        $obj = new CheckingSmsMessageStatusRequest();

        $this->assertEquals(CheckingSmsMessageStatusRequest::CHECKING_SMS_MESSAGE_STATUS_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getSmsID());
    }
}
