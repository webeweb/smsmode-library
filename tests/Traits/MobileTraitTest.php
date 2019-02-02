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
use WBW\Library\SMSMode\Tests\Fixtures\Traits\TestMobileTrait;

/**
 * Mobile trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Traits
 */
class MobileTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestMobileTrait();

        $this->assertNull($obj->getMobile());
    }

    /**
     * Tests the setMobile() method.
     *
     * @return void
     */
    public function testSetMobile() {

        $obj = new TestMobileTrait();

        $obj->setMobile("mobile");
        $this->assertEquals("mobile", $obj->getMobile());
    }
}
