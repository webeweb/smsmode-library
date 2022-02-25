<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use Exception;
use InvalidArgumentException;
use WBW\Library\SMSMode\API\SendingSMSMessageInterface;
use WBW\Library\SMSMode\Request\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending SMS message request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class SendingSMSMessageRequestTest extends AbstractTestCase {

    /**
     * Tests addNumero()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddNumero(): void {

        $obj = new SendingSMSMessageRequest();

        $obj->addNumero("33600000000");
        $this->assertEquals(["33600000000"], $obj->getNumero());
    }

    /**
     * Tests enumStop()
     *
     * @return void
     */
    public function testEnumStop(): void {

        $obj = new SendingSMSMessageRequest();

        $res = $obj->enumStop();
        $this->assertCount(2, $res);

        $this->assertContains(SendingSMSMessageInterface::STOP_ALWAYS, $res);
        $this->assertContains(SendingSMSMessageInterface::STOP_ONLY, $res);
    }

    /**
     * Tests setGroupe()
     *
     * @return void
     */
    public function testSetGroupe(): void {

        $obj = new SendingSMSMessageRequest();

        $obj->setGroupe("groupe");
        $this->assertEquals("groupe", $obj->getGroupe());
    }

    /**
     * Tests setNotificationUrlReponse()
     *
     * @return void
     */
    public function testSetNotificationUrlReponse(): void {

        $obj = new SendingSMSMessageRequest();

        $obj->setNotificationUrlReponse("notificationUrlReponse");
        $this->assertEquals("notificationUrlReponse", $obj->getNotificationUrlReponse());
    }

    /**
     * Tests setStop()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetStop(): void {

        $obj = new SendingSMSMessageRequest();

        $obj->setStop(SendingSMSMessageRequest::STOP_ALWAYS);
        $this->assertEquals(SendingSMSMessageRequest::STOP_ALWAYS, $obj->getStop());

        $obj->setStop(null);
        $this->assertNull($obj->getStop());
    }

    /**
     * Tests setStop()
     *
     * @return void
     */
    public function testSetStopWithInvalidArgumentException(): void {

        $obj = new SendingSMSMessageRequest();

        try {

            $obj->setStop(-1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The stop "-1" is invalid', $ex->getMessage());
        }
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/sendSMS.do", SendingSMSMessageRequest::SENDING_SMS_MESSAGE_RESOURCE_PATH);

        $obj = new SendingSMSMessageRequest();

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
        $this->assertEquals(SendingSMSMessageRequest::SENDING_SMS_MESSAGE_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getStop());
    }
}
