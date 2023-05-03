<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Traits\Integers;

use InvalidArgumentException;
use Throwable;
use WBW\Library\SmsMode\Tests\AbstractTestCase;
use WBW\Library\SmsMode\Tests\Fixtures\Traits\Integers\TestIntegerNbrMsgTrait;

/**
 * Integer nbr msg trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Traits\Integers
 */
class IntegerNbrMsgTraitTest extends AbstractTestCase {

    /**
     * Test setNbrMsg()
     *
     * @return void
     */
    public function testSetNbrMsg(): void {

        $obj = new TestIntegerNbrMsgTrait();

        $obj->setNbrMsg(1);
        $this->assertEquals(1, $obj->getNbrMsg());
    }

    /**
     * Test setNbrMsg()
     *
     * @return void
     */
    public function testSetNbrMsgWithInvalidArgumentException(): void {

        $obj = new TestIntegerNbrMsgTrait();

        try {

            $obj->setNbrMsg(0);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The "nbr msg" must be greater than 0', $ex->getMessage());
        }
    }
}
