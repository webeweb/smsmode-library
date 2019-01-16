<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Authentication;

use Exception;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\Authentication\SMSModeAuthentication;
use WBW\Library\SMSMode\Tests\AbstractFrameworkTestCase;

/**
 * sMsmode authentication test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Authentication
 */
class SMSModeAuthenticationTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SMSModeAuthentication();

        $this->assertNull($obj->getPassword());
        $this->assertNull($obj->getToken());
        $this->assertNull($obj->getUsername());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new SMSModeAuthentication();

        // ===
        try {
            $obj->toArray();
        } catch (Exception $ex) {
            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"username\" is missing", $ex->getMessage());
        }

        // ===
        $obj->setToken("token");
        $res1 = ["accessToken" => "token"];
        $this->assertEquals($res1, $obj->toArray());

        // ===
        try {

            $obj->setToken(null);
            $obj->setUsername("username");
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"password\" is missing", $ex->getMessage());
        }

        // ===
        $obj->setPassword("password");
        $res2 = ["pseudo" => "username", "pass" => "password"];
        $this->assertEquals($res2, $obj->toArray());
    }
}
