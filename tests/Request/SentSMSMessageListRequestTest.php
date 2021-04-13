<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use WBW\Library\SMSMode\Request\SentSMSMessageListRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sent SMS message list request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class SentSMSMessageListRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/smsList.do", SentSMSMessageListRequest::SENT_SMS_MESSAGE_LIST_RESOURCE_PATH);

        $obj = new SentSMSMessageListRequest();

        $this->assertNull($obj->getOffset());
        $this->assertEquals(SentSMSMessageListRequest::SENT_SMS_MESSAGE_LIST_RESOURCE_PATH, $obj->getResourcePath());
    }
}
