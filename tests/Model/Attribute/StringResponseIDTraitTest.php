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
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestStringResponseIDTrait;

/**
 * String response ID trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class StringResponseIDTraitTest extends AbstractTestCase {

    /**
     * Tests the setResponseID() method.
     *
     * @return void
     */
    public function testSetResponseID(): void {

        $obj = new TestStringResponseIDTrait();

        $obj->setResponseID("responseID");
        $this->assertEquals("responseID", $obj->getResponseID());
    }
}
