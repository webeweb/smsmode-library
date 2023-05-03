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
use Throwable;
use WBW\Library\SmsMode\Model\SmsReply;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * SMS reply test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Model
 */
class SmsReplyTest extends AbstractTestCase {

    /**
     * Test setMessageID()
     *
     * @return void
     */
    public function testSetMessageID(): void {

        $obj = new SmsReply();

        $obj->setMessageID("messageID");
        $this->assertEquals("messageID", $obj->getMessageID());
    }

    /**
     * Test setReceptionDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetReceptionDate(): void {

        // Set a Reception date mock.
        $receptionDate = new DateTime();

        $obj = new SmsReply();

        $obj->setReceptionDate($receptionDate);
        $this->assertSame($receptionDate, $obj->getReceptionDate());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SmsReply();

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
