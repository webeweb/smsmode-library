<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use WBW\Library\SMSMode\Model\RetrievingSMSReplyResponse;
use WBW\Library\SMSMode\Model\SMSReply;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Retrieving SMS reply response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class RetrievingSMSReplyResponseTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RetrievingSMSReplyResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertEquals([], $obj->getSMSReplies());
    }

    /**
     * Tests the setSMSReplies() method.
     *
     * @return void
     */
    public function testSetSMSReplies() {

        // Set a SMS reply mock.
        $smsReply = new SMSReply();

        $obj = new RetrievingSMSReplyResponse();

        $obj->setSMSReplies([$smsReply]);
        $this->assertEquals([$smsReply], $obj->getSMSReplies());
    }
}
