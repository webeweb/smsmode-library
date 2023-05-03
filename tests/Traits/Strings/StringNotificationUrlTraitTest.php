<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Traits\Strings;

use WBW\Library\SmsMode\Tests\AbstractTestCase;
use WBW\Library\SmsMode\Tests\Fixtures\Traits\Strings\TestStringNotificationUrlTrait;

/**
 * String notification URL trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Traits\Strings
 */
class StringNotificationUrlTraitTest extends AbstractTestCase {

    /**
     * Test setNotificationUrl()
     *
     * @return void
     */
    public function testSetNotificationUrl(): void {

        $obj = new TestStringNotificationUrlTrait();

        $obj->setNotificationUrl("notificationUrl");
        $this->assertEquals("notificationUrl", $obj->getNotificationUrl());
    }
}
