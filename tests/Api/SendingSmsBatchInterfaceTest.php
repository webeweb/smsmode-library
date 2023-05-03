<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Api;

use WBW\Library\SmsMode\Api\SendingSmsBatchInterface;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Sending SMS batch interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Api
 */
class SendingSmsBatchInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(4, SendingSmsBatchInterface::CLASSE_MSG_SMS);
        $this->assertEquals(2, SendingSmsBatchInterface::CLASSE_MSG_SMS_PRO);
    }
}
