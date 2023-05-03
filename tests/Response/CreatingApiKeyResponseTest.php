<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Response;

use DateTime;
use Throwable;
use WBW\Library\SmsMode\Response\CreatingApiKeyResponse;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Creating API key response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Response
 */
class CreatingApiKeyResponseTest extends AbstractTestCase {

    /**
     * Test setAccount()
     *
     * @return void
     */
    public function testSetAccount(): void {

        $obj = new CreatingApiKeyResponse();

        $obj->setAccount("account");
        $this->assertEquals("account", $obj->getAccount());
    }

    /**
     * Test setCreationDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetCreationDate(): void {

        // Set a Date/time mock.
        $creationDate = new DateTime();

        $obj = new CreatingApiKeyResponse();

        $obj->setCreationDate($creationDate);
        $this->assertSame($creationDate, $obj->getCreationDate());
    }

    /**
     * Test setException()
     *
     * @return void
     */
    public function testSetException(): void {

        $obj = new CreatingApiKeyResponse();

        $obj->setException(["status" => 400]);
        $this->assertEquals(["status" => 400], $obj->getException());
    }

    /**
     * Test setExpiration()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetExpiration(): void {

        // Set a Date/time mock.
        $expiration = new DateTime();

        $obj = new CreatingApiKeyResponse();

        $obj->setExpiration($expiration);
        $this->assertSame($expiration, $obj->getExpiration());
    }

    /**
     * Test setState()
     *
     * @return void
     */
    public function testSetState(): void {

        $obj = new CreatingApiKeyResponse();

        $obj->setState("state");
        $this->assertEquals("state", $obj->getState());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CreatingApiKeyResponse();

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
