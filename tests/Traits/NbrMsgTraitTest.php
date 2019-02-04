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
use WBW\Library\SMSMode\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Tests\Fixtures\Traits\TestNbrMsgTrait;

/**
 * Nbr msg trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Traits
 */
class NbrMsgTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestNbrMsgTrait();

        $this->assertNull($obj->getNbrMsg());
    }

    /**
     * Tests the setNbrMsg() method.
     *
     * @return void
     */
    public function testSetNbrMsg() {

        $obj = new TestNbrMsgTrait();

        $obj->setNbrMsg(1);
        $this->assertEquals(1, $obj->getNbrMsg());
    }

    /**
     * Tests the setNbrMsg() method.
     *
     * @return void
     */
    public function testSetNbrMsgWithUnexpectedValueException() {

        $obj = new TestNbrMsgTrait();

        try {

            $obj->setNbrMsg(0);
        } catch (Exception $ex) {

            $this->assertInstanceOf(UnexpectedValueException::class, $ex);
            $this->assertEquals("The \"nbr msg\" must be greater than 0", $ex->getMessage());
        }
    }
}
