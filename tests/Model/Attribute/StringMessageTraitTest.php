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
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestStringMessageTrait;

/**
 * String message trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class StringMessageTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestStringMessageTrait();

        $this->assertNull($obj->getMessage());
    }

    /**
     * Tests the setMessage() method.
     *
     * @return void
     */
    public function testSetMessage() {

        $obj = new TestStringMessageTrait();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }
}
