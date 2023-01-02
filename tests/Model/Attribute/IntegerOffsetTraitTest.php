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

use InvalidArgumentException;
use Throwable;
use WBW\Library\SmsMode\Tests\AbstractTestCase;
use WBW\Library\SmsMode\Tests\Fixtures\Model\Attribute\TestIntegerOffsetTrait;

/**
 * Integer offset trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Model\Attribute
 */
class IntegerOffsetTraitTest extends AbstractTestCase {

    /**
     * Tests setOffset()
     *
     * @return void
     */
    public function testSetOffset(): void {

        $obj = new TestIntegerOffsetTrait();

        $obj->setOffset(1);
        $this->assertEquals(1, $obj->getOffset());
    }

    /**
     * Tests setOffset()
     *
     * @return void
     */
    public function testSetOffsetWithInvalidArgumentException(): void {

        $obj = new TestIntegerOffsetTrait();

        try {

            $obj->setOffset(0);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The "offset" must be greater than 0', $ex->getMessage());
        }
    }
}
