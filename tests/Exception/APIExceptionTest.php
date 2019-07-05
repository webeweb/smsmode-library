<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Exception;

use Exception;
use WBW\Library\SMSMode\Exception\APIException;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * API exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Exception
 */
class APIExceptionTest extends AbstractTestCase {

    /**
     * Tests the construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        // Set an Exception mock.
        $throwable = new Exception;

        $obj = new APIException("message", $throwable);

        $this->assertEquals("message", $obj->getMessage());
        $this->assertSame($throwable, $obj->getPrevious());
    }
}
