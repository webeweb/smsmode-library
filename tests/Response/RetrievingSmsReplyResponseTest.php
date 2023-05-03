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

use WBW\Library\SmsMode\Model\SmsReply;
use WBW\Library\SmsMode\Response\RetrievingSmsReplyResponse;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Retrieving SMS reply response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Response
 */
class RetrievingSmsReplyResponseTest extends AbstractTestCase {

    /**
     * Test addSmsReply()
     *
     * @return void
     */
    public function testAddSmsReply(): void {

        // Set a SMS reply mock.
        $smsReply = new SmsReply();

        $obj = new RetrievingSmsReplyResponse();

        $obj->addSmsReply($smsReply);
        $this->assertEquals([$smsReply], $obj->getSmsReplies());
    }

    /**
     * Test hasSmsReply()
     *
     * @return void
     */
    public function testHasSmsReply(): void {

        // Set a SMS reply mock.
        $smsReply = new SmsReply();

        $obj = new RetrievingSmsReplyResponse();

        $obj->addSmsReply($smsReply);
        $this->assertTrue($obj->hasSmsReply());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RetrievingSmsReplyResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertEquals([], $obj->getSmsReplies());
        $this->assertFalse($obj->hasSmsReply());
    }
}
