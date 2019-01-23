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
use WBW\Library\SMSMode\Model\SMSReply;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * SMS reply test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class SMSReplyTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SMSReply();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getFrom());
        $this->assertNull($obj->getMessageID());
        $this->assertNull($obj->getReceptionDate());
        $this->assertNull($obj->getResponseID());
        $this->assertNull($obj->getText());
        $this->assertNull($obj->getTo());
    }

    /**
     * Tests the setFrom() method.
     *
     * @return void
     */
    public function testSetFrom() {

        $obj = new SMSReply();

        $obj->setFrom("from");
        $this->assertEquals("from", $obj->getFrom());
    }

    /**
     * Tests the setMessageID() method.
     *
     * @return void
     */
    public function testSetMessageID() {

        $obj = new SMSReply();

        $obj->setMessageID("messageID");
        $this->assertEquals("messageID", $obj->getMessageID());
    }

    /**
     * Tests the setReceptionDate() method.
     *
     * @return void
     */
    public function testSetReceptionDate() {

        // Set a Reception date mock.
        $receptionDate = new DateTime();

        $obj = new SMSReply();

        $obj->setReceptionDate($receptionDate);
        $this->assertSame($receptionDate, $obj->getReceptionDate());
    }

    /**
     * Tests the setResponseID() method.
     *
     * @return void
     */
    public function testSetResponseID() {

        $obj = new SMSReply();

        $obj->setResponseID("responseID");
        $this->assertEquals("responseID", $obj->getResponseID());
    }

    /**
     * Tests the setText() method.
     *
     * @return void
     */
    public function testSetText() {

        $obj = new SMSReply();

        $obj->setText("text");
        $this->assertEquals("text", $obj->getText());
    }

    /**
     * Tests the setTo() method.
     *
     * @return void
     */
    public function testSetTo() {

        $obj = new SMSReply();

        $obj->setTo("to");
        $this->assertEquals("to", $obj->getTo());
    }
}
