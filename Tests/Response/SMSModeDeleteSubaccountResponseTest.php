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
use WBW\Library\SMSMode\Response\SMSModeDeleteSubaccountResponse;

/**
 * sMsmode delete subaccount response test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 * @final
 */
final class SMSModeDeleteSubaccountResponseTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the parse() method.
	 */
	public function testParse() {

		$impl = " | ";

		$obj0 = new SMSModeDeleteSubaccountResponse(implode($impl, [SMSModeDeleteSubaccountResponse::CODE_CREATED, SMSModeDeleteSubaccountResponse::DESC_CREATED]));

		$this->assertEquals(SMSModeDeleteSubaccountResponse::CODE_CREATED, $obj0->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeDeleteSubaccountResponse::DESC_CREATED, $obj0->getDescription(), "The method parse() does not return the expected description");

		$obj31 = new SMSModeDeleteSubaccountResponse(implode($impl, [SMSModeDeleteSubaccountResponse::CODE_INTERNAL_ERROR, SMSModeDeleteSubaccountResponse::DESC_INTERNAL_ERROR]));

		$this->assertEquals(SMSModeDeleteSubaccountResponse::CODE_INTERNAL_ERROR, $obj31->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeDeleteSubaccountResponse::DESC_INTERNAL_ERROR, $obj31->getDescription(), "The method parse() does not return the expected description");

		$obj32 = new SMSModeDeleteSubaccountResponse(implode($impl, [SMSModeDeleteSubaccountResponse::CODE_AUTHENTICATION_ERROR, SMSModeDeleteSubaccountResponse::DESC_AUTHENTICATION_ERROR]));

		$this->assertEquals(SMSModeDeleteSubaccountResponse::CODE_AUTHENTICATION_ERROR, $obj32->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeDeleteSubaccountResponse::DESC_AUTHENTICATION_ERROR, $obj32->getDescription(), "The method parse() does not return the expected description");

		$obj35 = new SMSModeDeleteSubaccountResponse(implode($impl, [SMSModeDeleteSubaccountResponse::CODE_MISSING_REQUIRED_PARAMETER, SMSModeDeleteSubaccountResponse::DESC_MISSING_REQUIRED_PARAMETER]));

		$this->assertEquals(SMSModeDeleteSubaccountResponse::CODE_MISSING_REQUIRED_PARAMETER, $obj35->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeDeleteSubaccountResponse::DESC_MISSING_REQUIRED_PARAMETER, $obj35->getDescription(), "The method parse() does not return the expected description");

		$obj41 = new SMSModeDeleteSubaccountResponse(implode($impl, [SMSModeDeleteSubaccountResponse::CODE_ID_ALREADY_EXISTS, SMSModeDeleteSubaccountResponse::DESC_ID_ALREADY_EXISTS]));

		$this->assertEquals(SMSModeDeleteSubaccountResponse::CODE_ID_ALREADY_EXISTS, $obj41->getCode(), "The method parse() does not return the expected code");
		$this->assertEquals(SMSModeDeleteSubaccountResponse::DESC_ID_ALREADY_EXISTS, $obj41->getDescription(), "The method parse() does not return the expected description");
	}

}
