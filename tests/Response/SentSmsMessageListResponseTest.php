<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Response;

use WBW\Library\SmsMode\Model\SentSmsMessage;
use WBW\Library\SmsMode\Response\SentSmsMessageListResponse;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Sent SMS message list response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Response
 */
class SentSmsMessageListResponseTest extends AbstractTestCase {

    /**
     * Test addSentSmsMessage()
     *
     * @return void
     */
    public function testAddSentSmsMessage(): void {

        // Set a Sent SMS message mock.
        $sentSmsMessage = new SentSmsMessage();

        $obj = new SentSmsMessageListResponse();

        $obj->addSentSmsMessage($sentSmsMessage);
        $this->assertEquals([$sentSmsMessage], $obj->getSentSmsMessages());
    }

    /**
     * Test hasSentSmsMessage()
     *
     * @return void
     */
    public function testHasSentSmsMessage(): void {

        // Set a Sent SMS message mock.
        $sentSmsMessage = new SentSmsMessage();

        $obj = new SentSmsMessageListResponse();

        $obj->addSentSmsMessage($sentSmsMessage);
        $this->assertTrue($obj->hasSentSmsMessage());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SentSmsMessageListResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertEquals([], $obj->getSentSmsMessages());
        $this->assertFalse($obj->hasSentSmsMessage());
    }
}
