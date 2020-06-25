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
use WBW\Library\SMSMode\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestIntegerNbrMsgTrait;

/**
 * Integer nbr msg trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class IntegerNbrMsgTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbrMsg() method.
     *
     * @return void
     */
    public function testSetNbrMsg() {

        $obj = new TestIntegerNbrMsgTrait();

        $obj->setNbrMsg(1);
        $this->assertEquals(1, $obj->getNbrMsg());
    }

    /**
     * Tests the setNbrMsg() method.
     *
     * @return void
     */
    public function testSetNbrMsgWithInvalidArgumentException() {

        $obj = new TestIntegerNbrMsgTrait();

        try {

            $obj->setNbrMsg(0);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The "nbr msg" must be greater than 0', $ex->getMessage());
        }
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestIntegerNbrMsgTrait();

        $this->assertNull($obj->getNbrMsg());
    }
}
