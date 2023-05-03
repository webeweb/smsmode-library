<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Model;

use DateTime;
use WBW\Library\SmsMode\Model\SentSmsMessage;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Sent SMS message test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Model
 */
class SentSmsMessageTest extends AbstractTestCase {

    /**
     * Test setCostCredit()
     *
     * @return void
     */
    public function testSetCostCredit(): void {

        $obj = new SentSmsMessage();

        $obj->setCostCredits(0.1);
        $this->assertEquals(0.1, $obj->getCostCredits());
    }

    /**
     * Test setRecipientCount()
     *
     * @return void
     */
    public function testSetRecipientCount(): void {

        $obj = new SentSmsMessage();

        $obj->setRecipientCount(1);
        $this->assertEquals(1, $obj->getRecipientCount());
    }

    /**
     * Test setSendDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSendDate(): void {

        // Set a Send date mock.
        $sendDate = new DateTime();

        $obj = new SentSmsMessage();

        $obj->setSendDate($sendDate);
        $this->assertSame($sendDate, $obj->getSendDate());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SentSmsMessage();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getCostCredits());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getRecipientCount());
        $this->assertNull($obj->getSendDate());
        $this->assertNull($obj->getSmsID());
    }
}
