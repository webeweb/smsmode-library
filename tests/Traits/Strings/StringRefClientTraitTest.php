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
use WBW\Library\SmsMode\Tests\Fixtures\Traits\Strings\TestStringRefClientTrait;

/**
 * String ref client trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Traits\Strings
 */
class StringRefClientTraitTest extends AbstractTestCase {

    /**
     * Test setRefClient()
     *
     * @return void
     */
    public function testSetRefClient(): void {

        $obj = new TestStringRefClientTrait();

        $obj->setRefClient("refClient");
        $this->assertEquals("refClient", $obj->getRefClient());
    }
}
