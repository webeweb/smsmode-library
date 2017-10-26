<?php

/*
 * This file is part of the WBWSMSModeLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Exception;

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Exception\SMSModeInvalidNumberException;

/**
 * sMsmode invalid number exception test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Exception
 * @final
 */
final class SMSModeInvalidNumberExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {
        $ex = new SMSModeInvalidNumberException("");
        $this->assertEquals("The number \"\" is not valid", $ex->getMessage());
    }

}
