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
use WBW\Library\SMSMode\Model\SMSReply;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * SMS reply test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class SMSReplyTest extends AbstractTestCase {

    /**
     * Tests setMessageID()
     *
     * @return void
     */
    public function testSetMessageID(): void {

        $obj = new SMSReply();

        $obj->setMessageID("messageID");
        $this->assertEquals("messageID", $obj->getMessageID());
    }

    /**
     * Tests setReceptionDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetReceptionDate(): void {

        // Set a Reception date mock.
        $receptionDate = new DateTime();

        $obj = new SMSReply();

        $obj->setReceptionDate($receptionDate);
        $this->assertSame($receptionDate, $obj->getReceptionDate());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
