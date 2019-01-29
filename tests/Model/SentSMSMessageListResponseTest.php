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

use WBW\Library\SMSMode\Model\SentSMSMessage;
use WBW\Library\SMSMode\Model\SentSMSMessageListResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sent SMS message list response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class SentSMSMessageListResponseTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SentSMSMessageListResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertEquals([], $obj->getSentSMSMessages());
        $this->assertFalse($obj->hasSentSMSMessage());
    }

    /**
     * Tests the hasSentSMSMessage() method.
     *
     * @return void
     */
    public function testHasSentSMSMessage() {

        // Set a Sent SMS message mock.
        $sentSMSMessage = new SentSMSMessage();

        $obj = new SentSMSMessageListResponse();

        $obj->setSentSMSMessages([$sentSMSMessage]);
        $this->assertTrue($obj->hasSentSMSMessage());
    }

    /**
     * Tests the setSentSMSMessages() method.
     *
     * @return void
     */
    public function testSetSentSMSMessages() {

        // Set a Sent SMS message mock.
        $sentSMSMessage = new SentSMSMessage();

        $obj = new SentSMSMessageListResponse();

        $obj->setSentSMSMessages([$sentSMSMessage]);
        $this->assertEquals([$sentSMSMessage], $obj->getSentSMSMessages());
    }
}
