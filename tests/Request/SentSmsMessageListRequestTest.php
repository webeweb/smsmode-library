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

use WBW\Library\SmsMode\Request\SentSmsMessageListRequest;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Sent SMS message list request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Request
 */
class SentSmsMessageListRequestTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/smsList.do", SentSmsMessageListRequest::SENT_SMS_MESSAGE_LIST_RESOURCE_PATH);

        $obj = new SentSmsMessageListRequest();

        $this->assertNull($obj->getOffset());
        $this->assertEquals(SentSmsMessageListRequest::SENT_SMS_MESSAGE_LIST_RESOURCE_PATH, $obj->getResourcePath());
    }
}
