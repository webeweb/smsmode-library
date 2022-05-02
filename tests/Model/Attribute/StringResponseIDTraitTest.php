<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Model\Attribute;

use WBW\Library\SmsMode\Tests\AbstractTestCase;
use WBW\Library\SmsMode\Tests\Fixtures\Model\Attribute\TestStringResponseIDTrait;

/**
 * String response ID trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Model\Attribute
 */
class StringResponseIDTraitTest extends AbstractTestCase {

    /**
     * Tests setResponseID()
     *
     * @return void
     */
    public function testSetResponseID(): void {

        $obj = new TestStringResponseIDTrait();

        $obj->setResponseID("responseID");
        $this->assertEquals("responseID", $obj->getResponseID());
    }
}
