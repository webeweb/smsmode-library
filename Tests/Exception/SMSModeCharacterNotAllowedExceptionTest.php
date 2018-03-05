<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Exception;

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Exception\SMSModeCharacterNotAllowedException;

/**
 * sMsmode character not allowed exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Exception
 * @final
 */
final class SMSModeCharacterNotAllowedExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new SMSModeCharacterNotAllowedException("exception");

        $res = "The character \"exception\" is not allowed";
        $this->assertEquals($res, $ex->getMessage());
    }

}
