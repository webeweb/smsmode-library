<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use DateTime;
use WBW\Library\SMSMode\Model\AuthenticationResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Authentication response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class AuthenticationResponseTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AuthenticationResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getAccessToken());
        $this->assertNull($obj->getAccount());
        $this->assertNull($obj->getCreationDate());
        $this->assertNull($obj->getExpiration());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getState());
    }

    /**
     * Tests the setAccessToken() method.
     *
     * @return void
     */
    public function testSetAccessToken() {

        $obj = new AuthenticationResponse();

        $obj->setAccessToken("accessToken");
        $this->assertEquals("accessToken", $obj->getAccessToken());
    }

    /**
     * Tests the setAccount() method.
     *
     * @return void
     */
    public function testSetAccount() {

        $obj = new AuthenticationResponse();

        $obj->setAccount("account");
        $this->assertEquals("account", $obj->getAccount());
    }

    /**
     * Tests the setCreationDate() method.
     *
     * @return void
     */
    public function testSetCreationDate() {

        // Set a Date/time mock.
        $creationDate = new DateTime();

        $obj = new AuthenticationResponse();

        $obj->setCreationDate($creationDate);
        $this->assertSame($creationDate, $obj->getCreationDate());
    }

    /**
     * Tests the setExpiration() method.
     *
     * @return void
     */
    public function testSetExpiration() {

        // Set a Date/time mock.
        $expiration = new DateTime();

        $obj = new AuthenticationResponse();

        $obj->setExpiration($expiration);
        $this->assertSame($expiration, $obj->getExpiration());
    }

    /**
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId() {

        $obj = new AuthenticationResponse();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }

    /**
     * Tests the setState() method.
     *
     * @return void
     */
    public function testSetState() {

        $obj = new AuthenticationResponse();

        $obj->setState("state");
        $this->assertEquals("state", $obj->getState());
    }
}
