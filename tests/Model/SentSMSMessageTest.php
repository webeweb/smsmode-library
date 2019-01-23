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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setCostCredit() method.
     *
     * @return void
     */
    public function testSetCostCredit() {

        $obj = new SentSMSMessage();

        $obj->setCostCredits(0.1);
        $this->assertEquals(0.1, $obj->getCostCredits());
    }

    /**
     * Tests the setMessage() method.
     *
     * @return void
     */
    public function testSetMessage() {

        $obj = new SentSMSMessage();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new SentSMSMessage();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setRecipientCount() method.
     *
     * @return void
     */
    public function testSetRecipientCount() {

        $obj = new SentSMSMessage();

        $obj->setRecipientCount(1);
        $this->assertEquals(1, $obj->getRecipientCount());
    }

    /**
     * Tests the setSendDate() method.
     *
     * @return void
     */
    public function testSetSendDate() {

        // Set a Send date mock.
        $sendDate = new DateTime();

        $obj = new SentSMSMessage();

        $obj->setSendDate($sendDate);
        $this->assertSame($sendDate, $obj->getSendDate());
    }

    /**
     * Tests the setSmsID() method.
     *
     * @return void
     */
    public function testSetSmsID() {

        $obj = new SentSMSMessage();

        $obj->setSmsID("smsID");
        $this->assertEquals("smsID", $obj->getSmsID());
    }
}