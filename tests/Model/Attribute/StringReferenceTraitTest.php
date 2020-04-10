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
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestStringReferenceTrait;

/**
 * String reference trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class StringReferenceTraitTest extends AbstractTestCase {

    /**
     * Tests the setReference() method.
     *
     * @return void
     */
    public function testSetReference() {

        $obj = new TestStringReferenceTrait();

        $obj->setReference("reference");
        $this->assertEquals("reference", $obj->getReference());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestStringReferenceTrait();

        $this->assertNull($obj->getReference());
    }
}
