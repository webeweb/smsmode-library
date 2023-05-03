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

use WBW\Library\SmsMode\Api\SendingSmsMessageInterface;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Sending SMS message interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Api
 */
class SendingSmsMessageInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(2, SendingSmsMessageInterface::STOP_ALWAYS);
        $this->assertEquals(1, SendingSmsMessageInterface::STOP_ONLY);
    }
}
