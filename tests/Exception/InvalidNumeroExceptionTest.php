<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Exception;

use WBW\Library\SMSMode\Exception\InvalidNumeroException;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Invalid numero exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Exception
 */
class InvalidNumeroExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new InvalidNumeroException("exception");

        $res = "The numero \"exception\" is invalid";
        $this->assertEquals($res, $obj->getMessage());
    }
}
