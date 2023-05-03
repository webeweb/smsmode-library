<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Request;

use InvalidArgumentException;
use Throwable;
use WBW\Library\SmsMode\Api\SendingSmsMessageInterface;
use WBW\Library\SmsMode\Request\SendingSmsMessageRequest;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Sending SMS message request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Request
 */
class SendingSmsMessageRequestTest extends AbstractTestCase {

    /**
     * Test addNumero()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddNumero(): void {

        $obj = new SendingSmsMessageRequest();

        $obj->addNumero("33600000000");
        $this->assertEquals(["33600000000"], $obj->getNumero());
    }

    /**
     * Test enumStop()
     *
     * @return void
     */
    public function testEnumStop(): void {

        $obj = new SendingSmsMessageRequest();

        $res = $obj->enumStop();
        $this->assertCount(2, $res);

        $this->assertContains(SendingSmsMessageInterface::STOP_ALWAYS, $res);
        $this->assertContains(SendingSmsMessageInterface::STOP_ONLY, $res);
    }

    /**
     * Test setGroupe()
     *
     * @return void
     */
    public function testSetGroupe(): void {

        $obj = new SendingSmsMessageRequest();

        $obj->setGroupe("groupe");
        $this->assertEquals("groupe", $obj->getGroupe());
    }

    /**
     * Test setNotificationUrlReponse()
     *
     * @return void
     */
    public function testSetNotificationUrlReponse(): void {

        $obj = new SendingSmsMessageRequest();

        $obj->setNotificationUrlReponse("notificationUrlReponse");
        $this->assertEquals("notificationUrlReponse", $obj->getNotificationUrlReponse());
    }

    /**
     * Test setStop()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetStop(): void {

        $obj = new SendingSmsMessageRequest();

        $obj->setStop(SendingSmsMessageInterface::STOP_ALWAYS);
        $this->assertEquals(SendingSmsMessageInterface::STOP_ALWAYS, $obj->getStop());

        $obj->setStop(null);
        $this->assertNull($obj->getStop());
    }

    /**
     * Test setStop()
     *
     * @return void
     */
    public function testSetStopWithInvalidArgumentException(): void {

        $obj = new SendingSmsMessageRequest();

        try {

            $obj->setStop(-1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The stop "-1" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/sendSMS.do", SendingSmsMessageRequest::SENDING_SMS_MESSAGE_RESOURCE_PATH);

        $obj = new SendingSmsMessageRequest();

        $this->assertNull($obj->getClasseMsg());
        $this->assertNull($obj->getDateEnvoi());
        $this->assertNull($obj->getEmetteur());
        $this->assertNull($obj->getGroupe());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getNbrMsg());
        $this->assertNull($obj->getNotificationUrl());
        $this->assertNull($obj->getNotificationUrlReponse());
        $this->assertEquals([], $obj->getNumero());
        $this->assertNull($obj->getRefClient());
        $this->assertEquals(SendingSmsMessageRequest::SENDING_SMS_MESSAGE_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getStop());
    }
}
