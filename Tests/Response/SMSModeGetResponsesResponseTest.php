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

use DateTime;
use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Response\SMSModeGetResponsesResponse;
use WBW\Library\SMSMode\Response\SMSModeResponseInterface;

/**
 * sMsmode get responses response test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 * @final
 */
final class SMSModeGetResponsesResponseTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the parse() method.
	 *
	 * @return void
	 */
	public function testParse() {

		$objEx = new SMSModeGetResponsesResponse("exception");

		$this->assertEquals(null, $objEx->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(null, $objEx->getDescription(), "The method parse() does not return the expected description");

		$this->assertEquals(null, $objEx->getResponseID(), "The method parse() does not return the expected response id");
		$this->assertEquals(null, $objEx->getReceptionDate(), "The method parse() does not return the expected reception date");
		$this->assertEquals(null, $objEx->getFrom(), "The method parse() does not return the expected from");
		$this->assertEquals(null, $objEx->getText(), "The method parse() does not return the expected text");
		$this->assertEquals(null, $objEx->getTo(), "The method parse() does not return the expected to");
		$this->assertEquals(null, $objEx->getMessageID(), "The method parse() does not return the expected message id");

		$impl = " " . SMSModeResponseInterface::RESPONSE_DELIMITER . " ";

		$obj31 = new SMSModeGetResponsesResponse(implode($impl, [SMSModeGetResponsesResponse::CODE_AUTHENTICATION_ERROR, SMSModeGetResponsesResponse::DESC_AUTHENTICATION_ERROR]));

		$this->assertEquals(SMSModeGetResponsesResponse::CODE_AUTHENTICATION_ERROR, $obj31->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeGetResponsesResponse::DESC_AUTHENTICATION_ERROR, $obj31->getDescription(), "The method parse() does not return the expected description");

		$this->assertEquals(null, $obj31->getResponseID(), "The method parse() does not return the expected response id");
		$this->assertEquals(null, $obj31->getReceptionDate(), "The method parse() does not return the expected reception date");
		$this->assertEquals(null, $obj31->getFrom(), "The method parse() does not return the expected from");
		$this->assertEquals(null, $obj31->getText(), "The method parse() does not return the expected text");
		$this->assertEquals(null, $obj31->getTo(), "The method parse() does not return the expected to");
		$this->assertEquals(null, $obj31->getMessageID(), "The method parse() does not return the expected message id");

		$obj35 = new SMSModeGetResponsesResponse(implode($impl, [SMSModeGetResponsesResponse::CODE_MISSING_REQUIRED_PARAMETER, SMSModeGetResponsesResponse::DESC_MISSING_REQUIRED_PARAMETER]));

		$this->assertEquals(SMSModeGetResponsesResponse::CODE_MISSING_REQUIRED_PARAMETER, $obj35->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeGetResponsesResponse::DESC_MISSING_REQUIRED_PARAMETER, $obj35->getDescription(), "The method parse() does not return the expected description");

		$this->assertEquals(null, $obj35->getResponseID(), "The method parse() does not return the expected response id");
		$this->assertEquals(null, $obj35->getReceptionDate(), "The method parse() does not return the expected reception date");
		$this->assertEquals(null, $obj35->getFrom(), "The method parse() does not return the expected from");
		$this->assertEquals(null, $obj35->getText(), "The method parse() does not return the expected text");
		$this->assertEquals(null, $obj35->getTo(), "The method parse() does not return the expected to");
		$this->assertEquals(null, $obj35->getMessageID(), "The method parse() does not return the expected message id");

		$obj = new SMSModeGetResponsesResponse(implode($impl, ["responseID", "14092017-14:00", "from", "text", "to", "messageID"]));

		$this->assertEquals(null, $obj->getCode(), "The method parse() does not retrun the expected code");
		$this->assertEquals(null, $obj->getDescription(), "The method parse() does not retrun the expected description");

		$this->assertEquals("responseID", $obj->getResponseID(), "The method parse() does not return the expected response id");
		$this->assertEquals(new DateTime("2017-09-14 14:00:00"), $obj->getReceptionDate(), "The method parse() does not return the expected reception date");
		$this->assertEquals("from", $obj->getFrom(), "The method parse() does not return the expected from");
		$this->assertEquals("text", $obj->getText(), "The method parse() does not return the expected text");
		$this->assertEquals("to", $obj->getTo(), "The method parse() does not return the expected to");
		$this->assertEquals("messageID", $obj->getMessageID(), "The method parse() does not return the expected message id");

		$err = new SMSModeGetResponsesResponse("");

		$this->assertEquals(null, $err->getCode(), "The method parse() does not retrun the expected code");
		$this->assertEquals(null, $err->getDescription(), "The method parse() does not retrun the expected description");

		$this->assertEquals("", $err->getResponseID(), "The method parse() does not return the expected response id");
		$this->assertEquals(null, $err->getReceptionDate(), "The method parse() does not return the expected reception date");
		$this->assertEquals(null, $err->getFrom(), "The method parse() does not return the expected from");
		$this->assertEquals(null, $err->getText(), "The method parse() does not return the expected text");
		$this->assertEquals(null, $err->getTo(), "The method parse() does not return the expected to");
		$this->assertEquals(null, $err->getMessageID(), "The method parse() does not return the expected message id");
	}

}
