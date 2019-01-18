<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use WBW\Library\SMSMode\API\Request\SentSMSMessageListRequestInterface;
use WBW\Library\SMSMode\Request\SentSMSMessageListRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sent SMS message list request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class SentSMSMessageListRequestTest  extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SentSMSMessageListRequest();

        $this->assertEquals(SentSMSMessageListRequestInterface::SENT_SMS_MESSAGE_LIST_RESOURCE_PATH, $obj->getResourcePath());
    }
    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new SentSMSMessageListRequest();

        $obj->setOffset(10);

        $res = [
            "offset" => 10,
        ];
        $this->assertEquals($res, $obj->toArray());
    }
    /**
     * Tests the toArray() method.
     *
     * @return void
     * @throws NullPointerException Throws a null pointer exception.
     */
    public function testToArrayWithoutArguments() {

        $obj = new SentSMSMessageListRequest();

        $res = [];
        $this->assertEquals($res, $obj->toArray());
    }

}
