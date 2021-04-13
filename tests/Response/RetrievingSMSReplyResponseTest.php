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

use WBW\Library\SMSMode\Model\SMSReply;
use WBW\Library\SMSMode\Response\RetrievingSMSReplyResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Retrieving SMS reply response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 */
class RetrievingSMSReplyResponseTest extends AbstractTestCase {

    /**
     * Tests the addSMSReply() method.
     *
     * @return void
     */
    public function testAddSMSReply(): void {

        // Set a SMS reply mock.
        $smsReply = new SMSReply();

        $obj = new RetrievingSMSReplyResponse();

        $obj->addSMSReply($smsReply);
        $this->assertEquals([$smsReply], $obj->getSMSReplies());
    }

    /**
     * Tests the hasSMSReply() method.
     *
     * @return void
     */
    public function testHasSMSReply(): void {

        // Set a SMS reply mock.
        $smsReply = new SMSReply();

        $obj = new RetrievingSMSReplyResponse();

        $obj->addSMSReply($smsReply);
        $this->assertTrue($obj->hasSMSReply());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RetrievingSMSReplyResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertEquals([], $obj->getSMSReplies());
        $this->assertFalse($obj->hasSMSReply());
    }
}
