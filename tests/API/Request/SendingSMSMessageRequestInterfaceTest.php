<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\API\Request;

use WBW\Library\SMSMode\API\Request\SendingSMSMessageRequestInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending SMS message request interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\API\Request
 */
class SendingSMSMessageRequestInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("/1.6/sendSMS.do", SendingSMSMessageRequestInterface::SENDING_SMS_MESSAGE_RESOURCE_PATH);

        $this->assertEquals(4, SendingSMSMessageRequestInterface::CLASSE_MSG_SMS);
        $this->assertEquals(2, SendingSMSMessageRequestInterface::CLASSE_MSG_SMS_PRO);

        $this->assertEquals(2, SendingSMSMessageRequestInterface::STOP_ALWAYS);
        $this->assertEquals(1, SendingSMSMessageRequestInterface::STOP_ONLY);
    }
}
