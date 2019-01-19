<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use Exception;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\AuthenticationRequestInterface;
use WBW\Library\SMSMode\Request\AuthenticationRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Authentication request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class AuthenticationRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AuthenticationRequest();

        $this->assertEquals(AuthenticationRequestInterface::AUTHENTICATION_RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getAccessToken());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     * @throws NullPointerException Throws a null pointer exception.
     */
    public function testToArray() {

        $obj = new AuthenticationRequest();

        $obj->setAccessToken("accessToken");

        $res = [
            "accessToken" => "accessToken",
        ];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithoutArguments() {

        $obj = new AuthenticationRequest();

        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"accessToken\" is missing", $ex->getMessage());
        }
    }
}
