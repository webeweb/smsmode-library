<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Response;

use DateTime;
use Exception;
use WBW\Library\SMSMode\Response\CreatingAPIKeyResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Creating API key response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 */
class CreatingAPIKeyResponseTest extends AbstractTestCase {

    /**
     Tests setAccount()
     *
     * @return void
     */
    public function testSetAccount(): void {

        $obj = new CreatingAPIKeyResponse();

        $obj->setAccount("account");
        $this->assertEquals("account", $obj->getAccount());
    }

    /**
     Tests setCreationDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCreationDate(): void {

        // Set a Date/time mock.
        $creationDate = new DateTime();

        $obj = new CreatingAPIKeyResponse();

        $obj->setCreationDate($creationDate);
        $this->assertSame($creationDate, $obj->getCreationDate());
    }

    /**
     Tests setException()
     *
     * @return void
     */
    public function testSetException(): void {

        $obj = new CreatingAPIKeyResponse();

        $obj->setException(["status" => 400]);
        $this->assertEquals(["status" => 400], $obj->getException());
    }

    /**
     Tests setExpiration()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetExpiration(): void {

        // Set a Date/time mock.
        $expiration = new DateTime();

        $obj = new CreatingAPIKeyResponse();

        $obj->setExpiration($expiration);
        $this->assertSame($expiration, $obj->getExpiration());
    }

    /**
     Tests setState()
     *
     * @return void
     */
    public function testSetState(): void {

        $obj = new CreatingAPIKeyResponse();

        $obj->setState("state");
        $this->assertEquals("state", $obj->getState());
    }

    /**
     Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CreatingAPIKeyResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getAccessToken());
        $this->assertNull($obj->getAccount());
        $this->assertNull($obj->getCreationDate());
        $this->assertNull($obj->getException());
        $this->assertNull($obj->getExpiration());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getState());
    }
}
