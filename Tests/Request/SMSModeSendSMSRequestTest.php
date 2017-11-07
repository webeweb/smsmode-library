<?php

/*
 * This file is part of the WBWSMSModeLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use DateTime;
use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\SMSMode\Exception\SMSModeInvalidNumberException;
use WBW\Library\SMSMode\Exception\SMSModeMaxLimitNumberReachedException;
use WBW\Library\SMSMode\Exception\SMSModeMissingSettingException;
use WBW\Library\SMSMode\Request\SMSModeSendSMSRequest;
use WBW\Library\SMSMode\Response\SMSModeSendSMSResponse;

/**
 * sMsmode send SMS request test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
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

		try {
			$obj->addNUmber("number");
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeInvalidNumberException::class, $ex, "The method addNumber() does not throw the expected exception");
			$this->assertEquals("The number \"number\" is invalid", $ex->getMessage(), "The exception does not return the expected message");
		}

		try {
			for ($i = 0; $i < 302; ++$i) {
				$obj->addNumber("06" . sprintf("%'.08d", $i));
			}
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMaxLimitNumberReachedException::class, $ex, "The method addNumber() does not throw the expected exception");
			$this->assertEquals("The max limit of numbers reached: 300 allowed", $ex->getMessage(), "The exception does not return the expected message");
		}
	}

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new SMSModeSendSMSRequest();

		$this->assertEquals("sendSMS.do", $obj->getResourcePath(), "The method getResourcePath() does not return the expected value");

		$this->assertEquals(null, $obj->getCustomerReference(), "The method getCustomerReference() does not return the expected value");
		$this->assertEquals(null, $obj->getGroup(), "The method getGroup() does not return the expected value");
		$this->assertEquals(5, $obj->getMaxMessageNumber(), "The method getMaxMessageNumber() does not return the expected value");
		$this->assertEquals(null, $obj->getMessage(), "The method getMessage() does not return the expected value");
		$this->assertEquals(SMSModeSendSMSRequest::MESSAGE_CLASS_SMS_PRO, $obj->getMessageClass(), "The method getMessageClass() does not return the expected value");
		$this->assertEquals(null, $obj->getNotificationURL(), "The method getNotificationURL() does not return the expected value");
		$this->assertEquals([], $obj->getNumber(), "The method getNumber() does not return the expected value");
		$this->assertEquals(null, $obj->getResponseNotificationURL(), "The method getResponseNotificationURL() does not return the expected value");
		$this->assertEquals(null, $obj->getSendDate(), "The method getSendDate() does not return the expected value");
		$this->assertEquals(null, $obj->getSender(), "The method getSender() does not return the expected value");
		$this->assertEquals(null, $obj->getStop(), "The method getStop() does not return the expected value");
	}

	/**
	 * Tests the decodeNumber() method.
	 *
	 * @return void
	 */
	public function testDecodeNumber() {

		$obj = new SMSModeSendSMSRequest();

		$this->assertEquals("0612345678", $obj->decodeNumber("33612345678"), "The method encodeNumber() does not return the expected number with 33612345678");
		$this->assertEquals("0712345678", $obj->decodeNumber("33712345678"), "The method encodeNumber() does not return the expected number with 33712345678");
		$this->assertEquals("0612345678", $obj->decodeNumber("0612345678"), "The method encodeNumber() does not return the expected number with 0612345678");
		$this->assertEquals("0712345678", $obj->decodeNumber("0712345678"), "The method encodeNumber() does not return the expected number with 0712345678");
	}

	/**
	 * Tests the encodeNumber() method.
	 *
	 * @return void
	 */
	public function testEncodeNumber() {

		$obj = new SMSModeSendSMSRequest();

		$this->assertEquals("33612345678", $obj->encodeNumber("0612345678"), "The method encodeNumber() does not return the expected number with 0612345678");
		$this->assertEquals("33712345678", $obj->encodeNumber("0712345678"), "The method encodeNumber() does not return the expected number with 0712345678");
		$this->assertEquals("33612345678", $obj->encodeNumber("33612345678"), "The method encodeNumber() does not return the expected number with 33612345678");
		$this->assertEquals("33712345678", $obj->encodeNumber("33712345678"), "The method encodeNumber() does not return the expected number with 33712345678");
	}

	/**
	 * Tests the parseResponse() method.
	 *
	 * @return void
	 */
	public function testParseResponse() {

		$obj = new SMSModeSendSMSRequest();

		$res = $obj->parseResponse("exception");
		$this->assertInstanceOf(SMSModeSendSMSResponse::class, $res, "The method parseResponse() does not return the expected class");
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
		$this->assertCount(0, $obj->getNumber(), "The method removeNumber() does not remove number");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new SMSModeSendSMSRequest();
		$obj->setMessageClass(SMSModeSendSMSRequest::MESSAGE_CLASS_SMS_PRO);

		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The setting \"message\" is missing", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setMessage("message");
		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The setting \"number\" or \"group\" is missing", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->addNumber("0612345678");
		$res1 = ["message" => "message", "numero" => "33612345678", "classe_msg" => 2, "nbr_msg" => 5];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with message and number");

		$obj->removeNumber("0612345678");
		$obj->setGroup("group");
		$res2 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "nbr_msg" => 5];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with message and group");

		try {
			$obj->setMessageClass("exception");
		} catch (Exception $ex) {
			$this->assertInstanceOf(IllegalArgumentException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The message class \"exception\" is invalid", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setSendDate(new DateTime("2017-09-07 10:00:00"));
		$res3 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "date_envoi" => "07092017-10:00", "nbr_msg" => 5];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with message, group and send date");

		$obj->setSendDate(null);
		$obj->setCustomerReference("customerReference");
		$res4 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "refClient" => "customerReference", "nbr_msg" => 5];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with message, group and customer reference");

		$obj->setCustomerReference(null);
		$obj->setSender("sender");
		$res5 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "emetteur" => "sender", "nbr_msg" => 5];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with message, group and sender");

		$obj->setSender(null);
		$obj->setMaxMessageNumber(1);
		$res6 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "nbr_msg" => 1];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with message, group");

		$obj->setNotificationURL("notificationURL");
		$res7 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "nbr_msg" => 1, "notification_url" => "notificationURL"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with message, group and notification URL");

		$obj->setNotificationURL(null);
		$obj->setResponseNotificationURL("responseNotificationURL");
		$res8 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "nbr_msg" => 1, "notification_url_reponse" => "responseNotificationURL"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with message, group and response notification URL");

		$obj->setResponseNotificationURL(null);
		$obj->setStop(SMSModeSendSMSRequest::STOP_ALWAYS);
		$res9 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "nbr_msg" => 1, "stop" => SMSModeSendSMSRequest::STOP_ALWAYS];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with message, group and stop");

		$obj->setStop(null);
		$res10 = ["message" => "message", "groupe" => "group", "classe_msg" => 2, "nbr_msg" => 1];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with message, group and stop");
	}

}
