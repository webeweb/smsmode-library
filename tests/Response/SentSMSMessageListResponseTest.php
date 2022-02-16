<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Response;

use WBW\Library\SMSMode\Model\SentSMSMessage;
use WBW\Library\SMSMode\Response\SentSMSMessageListResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sent SMS message list response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 */
class SentSMSMessageListResponseTest extends AbstractTestCase {

    /**
     * Tests addSentSMSMessage()
     *
     * @return void
     */
    public function testAddSentSMSMessage(): void {

        // Set a Sent SMS message mock.
        $sentSMSMessage = new SentSMSMessage();

        $obj = new SentSMSMessageListResponse();

        $obj->addSentSMSMessage($sentSMSMessage);
        $this->assertEquals([$sentSMSMessage], $obj->getSentSMSMessages());
    }

    /**
     * Tests hasSentSMSMessage()
     *
     * @return void
     */
    public function testHasSentSMSMessage(): void {

        // Set a Sent SMS message mock.
        $sentSMSMessage = new SentSMSMessage();

        $obj = new SentSMSMessageListResponse();

        $obj->addSentSMSMessage($sentSMSMessage);
        $this->assertTrue($obj->hasSentSMSMessage());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SentSMSMessageListResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertEquals([], $obj->getSentSMSMessages());
        $this->assertFalse($obj->hasSentSMSMessage());
    }
}
