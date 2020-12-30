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
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestStringPrenomTrait;

/**
 * String prenom trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class StringPrenomTraitTest extends AbstractTestCase {

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new TestStringPrenomTrait();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestStringPrenomTrait();

        $this->assertNull($obj->getPrenom());
    }
}
