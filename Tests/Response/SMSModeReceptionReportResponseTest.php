<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Response;

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Response\SMSModeReceptionReportResponse;
use WBW\Library\SMSMode\Response\SMSModeResponseInterface;

/**
 * sMsmode reception report response test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 * @final
 */
final class SMSModeReceptionReportResponseTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the parse() method.
	 *
	 * @return void
	 */
	public function testParse() {

		$impl = " " . SMSModeResponseInterface::RESPONSE_DELIMITER . " ";

		$obj31 = new SMSModeReceptionReportResponse(implode($impl, [SMSModeReceptionReportResponse::CODE_INTERNAL_ERROR, SMSModeReceptionReportResponse::DESC_INTERNAL_ERROR]));

		$this->assertEquals(SMSModeReceptionReportResponse::CODE_INTERNAL_ERROR, $obj31->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeReceptionReportResponse::DESC_INTERNAL_ERROR, $obj31->getDescription(), "The method parse() does not return the expected description");
		$this->assertEquals([], $obj31->getReports(), "The method parse() does not return the expected reports");

		$obj35 = new SMSModeReceptionReportResponse(implode($impl, [SMSModeReceptionReportResponse::CODE_MISSING_REQUIRED_PARAMETER, SMSModeReceptionReportResponse::DESC_MISSING_REQUIRED_PARAMETER]));

		$this->assertEquals(SMSModeReceptionReportResponse::CODE_MISSING_REQUIRED_PARAMETER, $obj35->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeReceptionReportResponse::DESC_MISSING_REQUIRED_PARAMETER, $obj35->getDescription(), "The method parse() does not return the expected description");
		$this->assertEquals([], $obj35->getReports(), "The method parse() does not return the expected reports");

		$obj61 = new SMSModeReceptionReportResponse(implode($impl, [SMSModeReceptionReportResponse::CODE_NO_MESSAGE, SMSModeReceptionReportResponse::DESC_NO_MESSAGE]));

		$this->assertEquals(SMSModeReceptionReportResponse::CODE_NO_MESSAGE, $obj61->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeReceptionReportResponse::DESC_NO_MESSAGE, $obj61->getDescription(), "The method parse() does not return the expected description");
		$this->assertEquals([], $obj61->getReports(), "The method parse() does not return the expected reports");

		$obj = new SMSModeReceptionReportResponse(implode($impl, ["33612345678 0", "33623456789 2", "33698765432 11", "33687654321 13", "33712345678 34", "33723456789 35"]));

		$this->assertNull($obj->getCode(), "The method parse() does not retrun the expected code");
		$this->assertNull($obj->getDescription(), "The method parse() does not retrun the expected description");
		$this->assertCount(6, $obj->getReports(), "The method parse() does not return the expected reports");

		$this->assertEquals(null, $obj->getReportDescription("exception"), "The method parse() does not return the expected description with number exception");
		$this->assertEquals(SMSModeReceptionReportResponse::DESC_SMS_SEND, $obj->getReportDescription("33612345678"), "The method parse() does not return the expected description with number 33612345678");
		$this->assertEquals(SMSModeReceptionReportResponse::DESC_INTERNAL_ERROR_SENDING_SMS, $obj->getReportDescription("33623456789"), "The method parse() does not return the expected description with number 33623456789");
		$this->assertEquals(SMSModeReceptionReportResponse::DESC_SMS_RECEIVED, $obj->getReportDescription("33698765432"), "The method parse() does not return the expected description with number 33698765432");
		$this->assertEquals(SMSModeReceptionReportResponse::DESC_OPERATOR_DELIVERED, $obj->getReportDescription("33687654321"), "The method parse() does not return the expected description with number 33687654321");
		$this->assertEquals(SMSModeReceptionReportResponse::DESC_ROUTING_ERROR, $obj->getReportDescription("33712345678"), "The method parse() does not return the expected description with number 33712345678");
		$this->assertEquals(SMSModeReceptionReportResponse::DESC_RECEPTION_ERROR, $obj->getReportDescription("33723456789"), "The method parse() does not return the expected description with number 33723456789");

		$err = new SMSModeReceptionReportResponse("33612345678 0|");

		$this->assertNull($err->getCode(), "The method parse() does not retrun the expected code");
		$this->assertNull($err->getDescription(), "The method parse() does not retrun the expected description");
		$this->assertCount(1, $err->getReports(), "The method parse() does not return the expected reports");

		$this->assertEquals(SMSModeReceptionReportResponse::DESC_SMS_SEND, $err->getReportDescription("33612345678"), "The method parse() does not return the expected description with number 33612345678");
	}

}
