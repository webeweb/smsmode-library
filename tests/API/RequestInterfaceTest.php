<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\API;

use WBW\Library\SMSMode\API\RequestInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Request interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\API
 */
class RequestInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("https://api.smsmode.com/http", RequestInterface::REQUEST_ENDPOINT);

        $this->assertEquals("dmY", RequestInterface::REQUEST_DATE_FORMAT);
        $this->assertEquals("dmY-H:i", RequestInterface::REQUEST_DATETIME_FORMAT);
    }
}
