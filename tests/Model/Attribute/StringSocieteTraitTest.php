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
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestStringSocieteTrait;

/**
 * String societe trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class StringSocieteTraitTest extends AbstractTestCase {

    /**
     * Tests the setSociete() method.
     *
     * @return void
     */
    public function testSetSociete() {

        $obj = new TestStringSocieteTrait();

        $obj->setSociete("societe");
        $this->assertEquals("societe", $obj->getSociete());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestStringSocieteTrait();

        $this->assertNull($obj->getSociete());
    }
}
