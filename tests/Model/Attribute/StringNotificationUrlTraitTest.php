<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Attribute;

use WBW\Library\SMSMode\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestStringNotificationUrlTrait;

/**
 * String notification URL trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class StringNotificationUrlTraitTest extends AbstractTestCase {

    /**
     Tests setNotificationUrl()
     *
     * @return void
     */
    public function testSetNotificationUrl(): void {

        $obj = new TestStringNotificationUrlTrait();

        $obj->setNotificationUrl("notificationUrl");
        $this->assertEquals("notificationUrl", $obj->getNotificationUrl());
    }
}
