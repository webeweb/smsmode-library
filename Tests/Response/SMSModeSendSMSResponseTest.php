<?php

/*
 * This file is part of the WBWSMSModeLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Response;

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Response\SMSModeResponseInterface;
use WBW\Library\SMSMode\Response\SMSModeSendSMSResponse;

/**
 * SMSModeSendSMSResponseTest
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 * @final
 */
final class SMSModeSendSMSResponseTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the parse() method.
	 *
	 * @return void
	 */
	public function testParse() {

		$objEx = new SMSModeSendSMSResponse("exception");

		$this->assertEquals(null, $objEx->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(null, $objEx->getDescription(), "The method parse() does not return the expected description");
		$this->assertEquals(null, $objEx->getSmsID(), "The method parse() does not return the expected sms id");

		$impl = " " . SMSModeResponseInterface::RESPONSE_DELIMITER . " ";

		$obj0 = new SMSModeSendSMSResponse(implode($impl, [SMSModeSendSMSResponse::CODE_ACCEPTED, SMSModeSendSMSResponse::DESC_ACCEPTED, "smsID"]));

		$this->assertEquals(SMSModeSendSMSResponse::CODE_ACCEPTED, $obj0->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeSendSMSResponse::DESC_ACCEPTED, $obj0->getDescription(), "The method parse() does not return the expected description");
		$this->assertEquals("smsID", $obj0->getSmsID(), "The method parse() does not return the expected sms id");

		$obj31 = new SMSModeSendSMSResponse(implode($impl, [SMSModeSendSMSResponse::CODE_INTERNAL_ERROR, SMSModeSendSMSResponse::DESC_INTERNAL_ERROR]));

		$this->assertEquals(SMSModeSendSMSResponse::CODE_INTERNAL_ERROR, $obj31->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeSendSMSResponse::DESC_INTERNAL_ERROR, $obj31->getDescription(), "The method parse() does not return the expected description");
		$this->assertNull($obj31->getSmsID(), "The method parse() does not return the expected sms id");

		$obj32 = new SMSModeSendSMSResponse(implode($impl, [SMSModeSendSMSResponse::CODE_AUTHENTICATION_ERROR, SMSModeSendSMSResponse::DESC_AUTHENTICATION_ERROR]));

		$this->assertEquals(SMSModeSendSMSResponse::CODE_AUTHENTICATION_ERROR, $obj32->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeSendSMSResponse::DESC_AUTHENTICATION_ERROR, $obj32->getDescription(), "The method parse() does not return the expected description");
		$this->assertNull($obj32->getSmsID(), "The method parse() does not return the expected sms id");

		$obj33 = new SMSModeSendSMSResponse(implode($impl, [SMSModeSendSMSResponse::CODE_INSUFICIENT_CREDIT, SMSModeSendSMSResponse::DESC_INSUFICIENT_CREDIT]));

		$this->assertEquals(SMSModeSendSMSResponse::CODE_INSUFICIENT_CREDIT, $obj33->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeSendSMSResponse::DESC_INSUFICIENT_CREDIT, $obj33->getDescription(), "The method parse() does not return the expected description");
		$this->assertNull($obj33->getSmsID(), "The method parse() does not return the expected sms id");

		$obj35 = new SMSModeSendSMSResponse(implode($impl, [SMSModeSendSMSResponse::CODE_MISSING_REQUIRED_PARAMETER, SMSModeSendSMSResponse::DESC_MISSING_REQUIRED_PARAMETER]));

		$this->assertEquals(SMSModeSendSMSResponse::CODE_MISSING_REQUIRED_PARAMETER, $obj35->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeSendSMSResponse::DESC_MISSING_REQUIRED_PARAMETER, $obj35->getDescription(), "The method parse() does not return the expected description");
		$this->assertNull($obj35->getSmsID(), "The method parse() does not return the expected sms id");

		$obj50 = new SMSModeSendSMSResponse(implode($impl, [SMSModeSendSMSResponse::CODE_TEMPORALY_UNAVAILABLE, SMSModeSendSMSResponse::DESC_TEMPORALY_UNAVAILABLE]));

		$this->assertEquals(SMSModeSendSMSResponse::CODE_TEMPORALY_UNAVAILABLE, $obj50->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeSendSMSResponse::DESC_TEMPORALY_UNAVAILABLE, $obj50->getDescription(), "The method parse() does not return the expected description");
		$this->assertNull($obj50->getSmsID(), "The method parse() does not return the expected sms id");
	}

}
