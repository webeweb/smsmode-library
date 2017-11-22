<?php

/**
 * This file is part of the smsmode-library package.
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

		$this->assertEquals(null, $objEx->getCode());
		$this->assertEquals(null, $objEx->getDescription());

		$this->assertEquals(null, $objEx->getResponseID());
		$this->assertEquals(null, $objEx->getReceptionDate());
		$this->assertEquals(null, $objEx->getFrom());
		$this->assertEquals(null, $objEx->getText());
		$this->assertEquals(null, $objEx->getTo());
		$this->assertEquals(null, $objEx->getMessageID());

		$impl = " " . SMSModeResponseInterface::RESPONSE_DELIMITER . " ";

		$obj31 = new SMSModeGetResponsesResponse(implode($impl, [SMSModeGetResponsesResponse::CODE_AUTHENTICATION_ERROR, SMSModeGetResponsesResponse::DESC_AUTHENTICATION_ERROR]));

		$this->assertEquals(SMSModeGetResponsesResponse::CODE_AUTHENTICATION_ERROR, $obj31->getCode());
		$this->assertEquals(SMSModeGetResponsesResponse::DESC_AUTHENTICATION_ERROR, $obj31->getDescription());

		$this->assertEquals(null, $obj31->getResponseID());
		$this->assertEquals(null, $obj31->getReceptionDate());
		$this->assertEquals(null, $obj31->getFrom());
		$this->assertEquals(null, $obj31->getText());
		$this->assertEquals(null, $obj31->getTo());
		$this->assertEquals(null, $obj31->getMessageID());

		$obj35 = new SMSModeGetResponsesResponse(implode($impl, [SMSModeGetResponsesResponse::CODE_MISSING_REQUIRED_PARAMETER, SMSModeGetResponsesResponse::DESC_MISSING_REQUIRED_PARAMETER]));

		$this->assertEquals(SMSModeGetResponsesResponse::CODE_MISSING_REQUIRED_PARAMETER, $obj35->getCode());
		$this->assertEquals(SMSModeGetResponsesResponse::DESC_MISSING_REQUIRED_PARAMETER, $obj35->getDescription());

		$this->assertEquals(null, $obj35->getResponseID());
		$this->assertEquals(null, $obj35->getReceptionDate());
		$this->assertEquals(null, $obj35->getFrom());
		$this->assertEquals(null, $obj35->getText());
		$this->assertEquals(null, $obj35->getTo());
		$this->assertEquals(null, $obj35->getMessageID());

		$obj = new SMSModeGetResponsesResponse(implode($impl, ["responseID", "14092017-14:00", "from", "text", "to", "messageID"]));

		$this->assertEquals(null, $obj->getCode());
		$this->assertEquals(null, $obj->getDescription());

		$this->assertEquals("responseID", $obj->getResponseID());
		$this->assertEquals(new DateTime("2017-09-14 14:00:00"), $obj->getReceptionDate());
		$this->assertEquals("from", $obj->getFrom());
		$this->assertEquals("text", $obj->getText());
		$this->assertEquals("to", $obj->getTo());
		$this->assertEquals("messageID", $obj->getMessageID());

		$err = new SMSModeGetResponsesResponse("");

		$this->assertEquals(null, $err->getCode());
		$this->assertEquals(null, $err->getDescription());

		$this->assertEquals("", $err->getResponseID());
		$this->assertEquals(null, $err->getReceptionDate());
		$this->assertEquals(null, $err->getFrom());
		$this->assertEquals(null, $err->getText());
		$this->assertEquals(null, $err->getTo());
		$this->assertEquals(null, $err->getMessageID());
	}

}
