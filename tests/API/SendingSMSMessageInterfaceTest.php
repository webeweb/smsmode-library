<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\API;

use WBW\Library\SMSMode\API\SendingSMSMessageInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending SMS message interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\API
 */
class SendingSMSMessageInterfaceTest extends AbstractTestCase {

    /**
     Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(4, SendingSMSMessageInterface::CLASSE_MSG_SMS);
        $this->assertEquals(2, SendingSMSMessageInterface::CLASSE_MSG_SMS_PRO);

        $this->assertEquals(2, SendingSMSMessageInterface::STOP_ALWAYS);
        $this->assertEquals(1, SendingSMSMessageInterface::STOP_ONLY);
    }
}
