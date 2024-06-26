<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\SmsMode\Tests\Api;

use WBW\Library\SmsMode\Api\RequestInterface;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Request interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Api
 */
class RequestInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("dmY", RequestInterface::REQUEST_DATE_FORMAT);
        $this->assertEquals("dmY-H:i", RequestInterface::REQUEST_DATETIME_FORMAT);
    }
}
