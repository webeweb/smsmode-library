<?php

/**
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
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\Exception\SMSModeInvalidNumberException;
use WBW\Library\SMSMode\Exception\SMSModeMaxLimitNumberReachedException;
use WBW\Library\SMSMode\Request\SMSModeSendSMSRequest;
use WBW\Library\SMSMode\Response\SMSModeSendSMSResponse;

/**
 * sMsmode send SMS request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 * @final
 */
final class SMSModeSendSMSRequestTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the addNumber() method.
     *
     * @return void
     */
    public function testAddNumber() {

        $obj = new SMSModeSendSMSRequest();

        //
        try {

            $obj->addNumber("number");
        } catch (Exception $ex) {

            $this->assertInstanceOf(SMSModeInvalidNumberException::class, $ex);
            $this->assertEquals("The number \"number\" is invalid", $ex->getMessage());
        }

        //
        try {

            for ($i = 0; $i < 302; ++$i) {
                $obj->addNumber("06" . sprintf("%'.08d", $i));
            }
        } catch (Exception $ex) {

            $this->assertInstanceOf(SMSModeMaxLimitNumberReachedException::class, $ex);
            $this->assertEquals("The max limit of numbers reached: 300 allowed", $ex->getMessage());
        }
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SMSModeSendSMSRequest();

        $this->assertEquals("sendSMS.do", $obj->getResourcePath());

        $this->assertNull($obj->getCustomerReference());
        $this->assertNull($obj->getGroup());
        $this->assertEquals(5, $obj->getMaxMessageNumber());
        $this->assertNull($obj->getMessage());
        $this->assertEquals(SMSModeSendSMSRequest::MESSAGE_CLASS_SMS_PRO, $obj->getMessageClass());
        $this->assertNull($obj->getNotificationURL());
        $this->assertEquals([], $obj->getNumbers());
        $this->assertNull($obj->getResponseNotificationURL());
        $this->assertNull($obj->getSendDate());
        $this->assertNull($obj->getSender());
        $this->assertNull($obj->getStop());
    }

    /**
     * Tests the parseResponse() method.
     *
     * @return void
     */
    public function testParseResponse() {

        $obj = new SMSModeSendSMSRequest();

        $res = $obj->parseResponse("exception");
        $this->assertInstanceOf(SMSModeSendSMSResponse::class, $res);
    }

    /**
     * Tests the removeNumber() method.
     *
     * @return void
     */
    public function testRemoveNumber() {

        $obj = new SMSModeSendSMSRequest();

        $obj->addNumber("0612345678");
        $obj->removeNumber("0612345678");
        $this->assertCount(0, $obj->getNumbers());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new SMSModeSendSMSRequest();
        $obj->setMessageClass(SMSModeSendSMSRequest::MESSAGE_CLASS_SMS_PRO);

        //
        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"message\" is missing", $ex->getMessage());
        }

        //
        try {

            $obj->setMessage("message");
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"number\" or \"group\" is missing", $ex->getMessage());
        }

        //
        $obj->addNumber("0612345678");
        $res01 = ["message" => "message", "numero" => "0612345678", "classe_msg" => 2, "nbr_msg" => 5];
        $this->assertEquals($res01, $obj->toArray());

        //
        $obj->removeNumber("0612345678");
        $obj->setGroup("group");
        $res02 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "nbr_msg" => 5];
        $this->assertEquals($res02, $obj->toArray());

        //
        try {

            $obj->setMessageClass("exception");
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The message class \"exception\" is invalid", $ex->getMessage());
        }

        //
        $obj->setSendDate(new DateTime("2017-09-07 10:00:00"));
        $res03 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "date_envoi" => "07092017-10:00", "nbr_msg" => 5];
        $this->assertEquals($res03, $obj->toArray());

        //
        $obj->setSendDate(null);
        $obj->setCustomerReference("customerReference");
        $res04 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "refClient" => "customerReference", "nbr_msg" => 5];
        $this->assertEquals($res04, $obj->toArray());

        //
        $obj->setCustomerReference(null);
        $obj->setSender("sender");
        $res05 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "emetteur" => "sender", "nbr_msg" => 5];
        $this->assertEquals($res05, $obj->toArray());

        //
        $obj->setSender(null);
        $obj->setMaxMessageNumber(1);
        $res06 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "nbr_msg" => 1];
        $this->assertEquals($res06, $obj->toArray());

        //
        $obj->setNotificationURL("notificationURL");
        $res07 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "nbr_msg" => 1, "notification_url" => "notificationURL"];
        $this->assertEquals($res07, $obj->toArray());

        //
        $obj->setNotificationURL(null);
        $obj->setResponseNotificationURL("responseNotificationURL");
        $res08 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "nbr_msg" => 1, "notification_url_reponse" => "responseNotificationURL"];
        $this->assertEquals($res08, $obj->toArray());

        //
        $obj->setResponseNotificationURL(null);
        $obj->setStop(SMSModeSendSMSRequest::STOP_ALWAYS);
        $res09 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "nbr_msg" => 1, "stop" => SMSModeSendSMSRequest::STOP_ALWAYS];
        $this->assertEquals($res09, $obj->toArray());

        //
        $obj->setStop(null);
        $res10 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "nbr_msg" => 1];
        $this->assertEquals($res10, $obj->toArray());
    }

}
