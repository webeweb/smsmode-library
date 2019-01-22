<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use WBW\Library\SMSMode\Model\AuthenticationRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Authentication request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class AuthenticationRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AuthenticationRequest();

        $this->assertNull($obj->getAccessToken());
    }

    /**
     * Tests the setAccessToken() method.
     *
     * @return void
     */
    public function testSetAccessToken() {

        $obj = new AuthenticationRequest();

        $obj->setAccessToken("accessToken");
        $this->assertEquals("accessToken", $obj->getAccessToken());
    }
}
