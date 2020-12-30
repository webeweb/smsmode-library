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
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestStringNomTrait;

/**
 * String nom trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class StringNomTraitTest extends AbstractTestCase {

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new TestStringNomTrait();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestStringNomTrait();

        $this->assertNull($obj->getNom());
    }
}
