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

use Exception;
use UnexpectedValueException;
use WBW\Library\SMSMode\API\SendingSMSBatchInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Tests\Fixtures\Traits\TestClasseMsgTrait;

/**
 * Classe msg trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Traits
 */
class ClasseMsgTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestClasseMsgTrait();

        $this->assertNull($obj->getClasseMsg());
    }

    /**
     * Tests the enumClasseMsg() method.
     *
     * @return void
     */
    public function testEnumClasseMsg() {

        $obj = new TestClasseMsgTrait();

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
    public function testSetClasseMsg() {

        $obj = new TestClasseMsgTrait();

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
    public function testSetClasseMsgWithUnexpectedValueException() {

        $obj = new TestClasseMsgTrait();

        try {

            $obj->setClasseMsg(0);
        } catch (Exception $ex) {

            $this->assertInstanceOf(UnexpectedValueException::class, $ex);
            $this->assertEquals("The classe msg \"0\" is invalid", $ex->getMessage());
        }
    }
}
