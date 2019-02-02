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
use Exception;
use UnexpectedValueException;
use WBW\Library\SMSMode\Model\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending SMS message request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class SendingSMSMessageRequestTest extends AbstractTestCase {

    /**
     * Tests the addNumero() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddNumero() {

        $obj = new SendingSMSMessageRequest();

        $obj->addNumero("33600000000");
        $this->assertEquals(["33600000000"], $obj->getNumero());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("/http/1.6/sendSMS.do", SendingSMSMessageRequest::SENDING_SMS_MESSAGE_RESOURCE_PATH);

        $this->assertEquals(4, SendingSMSMessageRequest::CLASSE_MSG_SMS);
        $this->assertEquals(2, SendingSMSMessageRequest::CLASSE_MSG_SMS_PRO);
        $this->assertEquals(2, SendingSMSMessageRequest::STOP_ALWAYS);
        $this->assertEquals(1, SendingSMSMessageRequest::STOP_ONLY);

        $obj = new SendingSMSMessageRequest();

        $this->assertNull($obj->getClasseMsg());
        $this->assertNull($obj->getDateEnvoi());
        $this->assertNull($obj->getEmetteur());
        $this->assertNull($obj->getGroupe());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getNbrMsg());
        $this->assertNull($obj->getNotificationURL());
        $this->assertNull($obj->getNotificationURLReponse());
        $this->assertEquals([], $obj->getNumero());
        $this->assertNull($obj->getRefClient());
        $this->assertEquals(SendingSMSMessageRequest::SENDING_SMS_MESSAGE_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getStop());
    }

    /**
     * Tests the setClasseMsg() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetClasseMsg() {

        $obj = new SendingSMSMessageRequest();

        $obj->setClasseMsg(SendingSMSMessageRequest::CLASSE_MSG_SMS);
        $this->assertEquals(SendingSMSMessageRequest::CLASSE_MSG_SMS, $obj->getClasseMsg());
    }

    /**
     * Tests the setClasseMsg() method.
     *
     * @return void
     */
    public function testSetClasseMsgWithUnexpectedValueException() {

        $obj = new SendingSMSMessageRequest();

        try {

            $obj->setClasseMsg(-1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(UnexpectedValueException::class, $ex);
            $this->assertEquals("The classe msg \"-1\" is invalid", $ex->getMessage());
        }
    }

    /**
     * Tests the setDateEnvoi() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEnvoi() {

        // Set a End date mock.
        $endDate = new DateTime();

        $obj = new SendingSMSMessageRequest();

        $obj->setDateEnvoi($endDate);
        $this->assertSame($endDate, $obj->getDateEnvoi());
    }

    /**
     * Tests the setEmetteur() method.
     *
     * @return void
     */
    public function testSetEmetteur() {

        $obj = new SendingSMSMessageRequest();

        $obj->setEmetteur("emetteur");
        $this->assertEquals("emetteur", $obj->getEmetteur());
    }

    /**
     * Tests the setGroupe() method.
     *
     * @return void
     */
    public function testSetGroupe() {

        $obj = new SendingSMSMessageRequest();

        $obj->setGroupe("groupe");
        $this->assertEquals("groupe", $obj->getGroupe());
    }

    /**
     * Tests the setMessage() method.
     *
     * @return void
     */
    public function testSetMessage() {

        $obj = new SendingSMSMessageRequest();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Tests the setNbrMsg() method.
     *
     * @return void
     */
    public function testSetNbrMsg() {

        $obj = new SendingSMSMessageRequest();

        $obj->setNbrMsg(1);
        $this->assertEquals(1, $obj->getNbrMsg());
    }

    /**
     * Tests the setNotificationURL() method.
     *
     * @return void
     */
    public function testSetNotificationURL() {

        $obj = new SendingSMSMessageRequest();

        $obj->setNotificationURL("notificationURL");
        $this->assertEquals("notificationURL", $obj->getNotificationURL());
    }

    /**
     * Tests the setNotificationURLReponse() method.
     *
     * @return void
     */
    public function testSetNotificationURLReponse() {

        $obj = new SendingSMSMessageRequest();

        $obj->setNotificationURLReponse("notificationURLReponse");
        $this->assertEquals("notificationURLReponse", $obj->getNotificationURLReponse());
    }

    /**
     * Tests the setRefClient() method.
     *
     * @return void
     */
    public function testSetRefClient() {

        $obj = new SendingSMSMessageRequest();

        $obj->setRefClient("refClient");
        $this->assertEquals("refClient", $obj->getRefClient());
    }

    /**
     * Tests the setStop() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetStop() {

        $obj = new SendingSMSMessageRequest();

        $obj->setStop(SendingSMSMessageRequest::STOP_ALWAYS);
        $this->assertEquals(SendingSMSMessageRequest::STOP_ALWAYS, $obj->getStop());
    }

    /**
     * Tests the setStop() method.
     *
     * @return void
     */
    public function testSetStopWithUnexpectedValueException() {

        $obj = new SendingSMSMessageRequest();

        try {

            $obj->setStop(-1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(UnexpectedValueException::class, $ex);
            $this->assertEquals("The stop \"-1\" is invalid", $ex->getMessage());
        }
    }
}
