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

use Exception;
use InvalidArgumentException;
use WBW\Library\SMSMode\API\SendingSMSBatchInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestIntegerClasseMsgTrait;

/**
 * Integer classe msg trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class IntegerClasseMsgTraitTest extends AbstractTestCase {

    /**
     * Tests the enumClasseMsg() method.
     *
     * @return void
     */
    public function testEnumClasseMsg(): void {

        $obj = new TestIntegerClasseMsgTrait();

        $res = [
            SendingSMSBatchInterface::CLASSE_MSG_SMS,
            SendingSMSBatchInterface::CLASSE_MSG_SMS_PRO,
        ];
        $this->assertEquals($res, $obj->enumClasseMsg());
    }

    /**
     * Tests the setClasseMsg() method.
     *
     * @return void
     */
    public function testSetClasseMsg(): void {

        $obj = new TestIntegerClasseMsgTrait();

        $obj->setClasseMsg(SendingSMSBatchInterface::CLASSE_MSG_SMS);
        $this->assertEquals(SendingSMSBatchInterface::CLASSE_MSG_SMS, $obj->getClasseMsg());

        $obj->setClasseMsg(null);
        $this->assertNull($obj->getClasseMsg());
    }

    /**
     * Tests the setClasseMsg() method.
     *
     * @return void
     */
    public function testSetClasseMsgWithInvalidArgumentException(): void {

        $obj = new TestIntegerClasseMsgTrait();

        try {

            $obj->setClasseMsg(0);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The classe msg "0" is invalid', $ex->getMessage());
        }
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestIntegerClasseMsgTrait();

        $this->assertNull($obj->getClasseMsg());
    }
}
