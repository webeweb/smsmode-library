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

use WBW\Library\SMSMode\Model\SentSMSMessageListRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sent SMS message list request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class SentSMSMessageListRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SentSMSMessageListRequest();

        $this->assertNull($obj->getOffset());
    }

    /**
     * Tests the setOffset() method.
     *
     * @return void
     */
    public function testSetOffset() {

        $obj = new SentSMSMessageListRequest();

        $obj->setOffset(0);
        $this->assertEquals(0, $obj->getOffset());
    }
}
