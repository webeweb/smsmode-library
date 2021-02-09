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
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestStringRefClientTrait;

/**
 * String ref client trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class StringRefClientTraitTest extends AbstractTestCase {

    /**
     * Tests the setRefClient() method.
     *
     * @return void
     */
    public function testSetRefClient(): void {

        $obj = new TestStringRefClientTrait();

        $obj->setRefClient("refClient");
        $this->assertEquals("refClient", $obj->getRefClient());
    }
}
