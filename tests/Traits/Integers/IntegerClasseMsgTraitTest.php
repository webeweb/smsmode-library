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
use WBW\Library\SmsMode\Api\SendingSmsBatchInterface;
use WBW\Library\SmsMode\Tests\AbstractTestCase;
use WBW\Library\SmsMode\Tests\Fixtures\Traits\Integers\TestIntegerClasseMsgTrait;

/**
 * Integer classe msg trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Traits\Integers
 */
class IntegerClasseMsgTraitTest extends AbstractTestCase {

    /**
     * Test enumClasseMsg()
     *
     * @return void
     */
    public function testEnumClasseMsg(): void {

        $obj = new TestIntegerClasseMsgTrait();

        $res = [
            SendingSmsBatchInterface::CLASSE_MSG_SMS,
            SendingSmsBatchInterface::CLASSE_MSG_SMS_PRO,
        ];
        $this->assertEquals($res, $obj->enumClasseMsg());
    }

    /**
     * Test setClasseMsg()
     *
     * @return void
     */
    public function testSetClasseMsg(): void {

        $obj = new TestIntegerClasseMsgTrait();

        $obj->setClasseMsg(SendingSmsBatchInterface::CLASSE_MSG_SMS);
        $this->assertEquals(SendingSmsBatchInterface::CLASSE_MSG_SMS, $obj->getClasseMsg());

        $obj->setClasseMsg(null);
        $this->assertNull($obj->getClasseMsg());
    }

    /**
     * Test setClasseMsg()
     *
     * @return void
     */
    public function testSetClasseMsgWithInvalidArgumentException(): void {

        $obj = new TestIntegerClasseMsgTrait();

        try {

            $obj->setClasseMsg(0);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The classe msg "0" is invalid', $ex->getMessage());
        }
    }
}
