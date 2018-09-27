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

use WBW\Library\SMSMode\Exception\SMSModeMessageTooLongException;
use WBW\Library\SMSMode\Tests\AbstractFrameworkTestCase;

/**
 * sMsmode message too long exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Exception
 * @final
 */
final class SMSModeMessageTooLongExceptionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new SMSModeMessageTooLongException("exception", 8);

        $res = "The message \"exception\" exceeds the limit of 8 characters";
        $this->assertEquals($res, $ex->getMessage());
    }

}
