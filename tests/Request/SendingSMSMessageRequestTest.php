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

use DateTime;
use Exception;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\SendingSMSMessageRequestInterface;
use WBW\Library\SMSMode\Request\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending SMS message request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class SendingSMSMessageRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SendingSMSMessageRequest();

        $this->assertEquals(SendingSMSMessageRequestInterface::SENDING_SMS_MESSAGE_RESOURCE_PATH, $obj->getResourcePath());

        $this->assertEquals(SendingSMSMessageRequestInterface::CLASSE_MSG_SMS_PRO, $obj->getClasseMsg());
        $this->assertNull($obj->getDateEnvoi());
        $this->assertNull($obj->getEmetteur());
        $this->assertNull($obj->getGroupe());
        $this->assertNull($obj->getMessage());
        $this->assertEquals(5, $obj->getNbrMsg());
        $this->assertNull($obj->getNotificationURL());
        $this->assertNull($obj->getNotificationURLReponse());
        $this->assertEquals([], $obj->getNumero());
        $this->assertNull($obj->getRefClient());
        $this->assertNull($obj->getStop());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     * @throws NullPointerException Throws a null pointer exception.
     * @throws IllegalArgumentException Throws an illegal argument exception.
     */
    public function testToArray() {

        $obj = new SendingSMSMessageRequest();

        $obj->setMessage("message");
        $obj->setNumero(["numero1", "numero2"]);

        $obj->setClasseMsg(SendingSMSMessageRequestInterface::CLASSE_MSG_SMS);
        $obj->setDateEnvoi(new DateTime("2017-09-07 10:00:00"));
        $obj->setRefClient("refClient");
        $obj->setEmetteur("emetteur");
        $obj->setNbrMsg(1);
        $obj->setNotificationURL("notificationURL");
        $obj->setNotificationURLReponse("notificationURLReponse");
        $obj->setStop(SendingSMSMessageRequestInterface::STOP_ALWAYS);

        $res = [
            "message"                  => "message",
            "numero"                   => "numero1,numero2",
            "classe_msg"               => 4,
            "date_envoi"               => "07092017-10:00",
            "refClient"                => "refClient",
            "emetteur"                 => "emetteur",
            "nbr_msg"                  => 1,
            "notification_url"         => "notificationURL",
            "notification_url_reponse" => "notificationURLReponse",
            "stop"                     => 2,
        ];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     * @throws NullPointerException Throws a null pointer exception.
     * @throws IllegalArgumentException Throws an illegal argument exception.
     */
    public function testToArrayWithGroupe() {

        $obj = new SendingSMSMessageRequest();

        $obj->setMessage("message");
        $obj->setGroupe("groupe");

        $obj->setClasseMsg(SendingSMSMessageRequestInterface::CLASSE_MSG_SMS);
        $obj->setDateEnvoi(new DateTime("2017-09-07 10:00:00"));
        $obj->setRefClient("refClient");
        $obj->setEmetteur("emetteur");
        $obj->setNbrMsg(1);
        $obj->setNotificationURL("notificationURL");
        $obj->setNotificationURLReponse("notificationURLReponse");
        $obj->setStop(null);

        $res = [
            "message"                  => "message",
            "groupe"                   => "groupe",
            "classe_msg"               => 4,
            "date_envoi"               => "07092017-10:00",
            "refClient"                => "refClient",
            "emetteur"                 => "emetteur",
            "nbr_msg"                  => 1,
            "notification_url"         => "notificationURL",
            "notification_url_reponse" => "notificationURLReponse",
        ];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithoutArguments() {

        $obj = new SendingSMSMessageRequest();

        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"message\" is missing", $ex->getMessage());
        }

        try {

            $obj->setMessage("message");
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"number\" or \"group\" is missing", $ex->getMessage());
        }
    }
}
