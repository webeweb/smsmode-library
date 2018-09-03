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

use WBW\Library\SMSMode\Exception\SMSModeMaxLimitNumberReachedException;
use WBW\Library\SMSMode\Tests\Cases\AbstractSMSModeFrameworkTestCase;

/**
 * sMsmode max limit number reached exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Exception
 * @final
 */
final class SMSModeMaxLimitNumberReachedExceptionTest extends AbstractSMSModeFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new SMSModeMaxLimitNumberReachedException(200);

        $res = "The max limit of numbers reached: 200 allowed";
        $this->assertEquals($res, $ex->getMessage());
    }

}
