<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Traits;

use WBW\Library\SMSMode\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Tests\Fixtures\Traits\TestSocieteTrait;

/**
 * Societe trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Traits
 */
class SocieteTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestSocieteTrait();

        $this->assertNull($obj->getSociete());
    }

    /**
     * Tests the setSociete() method.
     *
     * @return void
     */
    public function testSetSociete() {

        $obj = new TestSocieteTrait();

        $obj->setSociete("societe");
        $this->assertEquals("societe", $obj->getSociete());
    }
}
