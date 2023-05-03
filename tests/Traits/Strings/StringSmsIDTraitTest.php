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
use WBW\Library\SmsMode\Tests\Fixtures\Traits\Strings\TestStringSmsIDTrait;

/**
 * String SMS ID trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Traits\Strings
 */
class StringSmsIDTraitTest extends AbstractTestCase {

    /**
     * Test setSmsID()
     *
     * @return void
     */
    public function testSetSmsID(): void {

        $obj = new TestStringSmsIDTrait();

        $obj->setSmsID("smsID");
        $this->assertEquals("smsID", $obj->getSmsID());
    }
}
