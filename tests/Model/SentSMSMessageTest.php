<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use DateTime;
use Exception;
use WBW\Library\SMSMode\Model\SentSMSMessage;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sent SMS message test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class SentSMSMessageTest extends AbstractTestCase {

    /**
     Tests setCostCredit()
     *
     * @return void
     */
    public function testSetCostCredit(): void {

        $obj = new SentSMSMessage();

        $obj->setCostCredits(0.1);
        $this->assertEquals(0.1, $obj->getCostCredits());
    }

    /**
     Tests setRecipientCount()
     *
     * @return void
     */
    public function testSetRecipientCount(): void {

        $obj = new SentSMSMessage();

        $obj->setRecipientCount(1);
        $this->assertEquals(1, $obj->getRecipientCount());
    }

    /**
     Tests setSendDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSendDate(): void {

        // Set a Send date mock.
        $sendDate = new DateTime();

        $obj = new SentSMSMessage();

        $obj->setSendDate($sendDate);
        $this->assertSame($sendDate, $obj->getSendDate());
    }

    /**
     Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SentSMSMessage();

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
