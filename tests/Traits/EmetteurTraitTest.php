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
use WBW\Library\SMSMode\Tests\Fixtures\Traits\TestEmetteurTrait;

/**
 * Emetteur trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Traits
 */
class EmetteurTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestEmetteurTrait();

        $this->assertNull($obj->getEmetteur());
    }

    /**
     * Tests the setEmetteur() method.
     *
     * @return void
     */
    public function testSetEmetteur() {

        $obj = new TestEmetteurTrait();

        $obj->setEmetteur("emetteur");
        $this->assertEquals("emetteur", $obj->getEmetteur());
    }
}
