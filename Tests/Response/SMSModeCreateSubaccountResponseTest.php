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
use WBW\Library\SMSMode\Response\SMSModeCreateSubaccountResponse;
use WBW\Library\SMSMode\Response\SMSModeResponseInterface;

/**
 * sMsmode create subaccount response test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 * @final
 */
final class SMSModeCreateSubaccountResponseTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the parse() method.
	 *
	 * @return void
	 */
	public function testParse() {

		$objEx = new SMSModeCreateSubaccountResponse("exception");

		$this->assertEquals(null, $objEx->getCode());
		$this->assertEquals(null, $objEx->getDescription());

		$impl = " " . SMSModeResponseInterface::RESPONSE_DELIMITER . " ";

		$obj0 = new SMSModeCreateSubaccountResponse(implode($impl, [SMSModeCreateSubaccountResponse::CODE_CREATED, SMSModeCreateSubaccountResponse::DESC_CREATED]));

		$this->assertEquals(SMSModeCreateSubaccountResponse::CODE_CREATED, $obj0->getCode());
		$this->assertEquals(SMSModeCreateSubaccountResponse::DESC_CREATED, $obj0->getDescription());

		$obj31 = new SMSModeCreateSubaccountResponse(implode($impl, [SMSModeCreateSubaccountResponse::CODE_INTERNAL_ERROR, SMSModeCreateSubaccountResponse::DESC_INTERNAL_ERROR]));

		$this->assertEquals(SMSModeCreateSubaccountResponse::CODE_INTERNAL_ERROR, $obj31->getCode());
		$this->assertEquals(SMSModeCreateSubaccountResponse::DESC_INTERNAL_ERROR, $obj31->getDescription());

		$obj32 = new SMSModeCreateSubaccountResponse(implode($impl, [SMSModeCreateSubaccountResponse::CODE_AUTHENTICATION_ERROR, SMSModeCreateSubaccountResponse::DESC_AUTHENTICATION_ERROR]));

		$this->assertEquals(SMSModeCreateSubaccountResponse::CODE_AUTHENTICATION_ERROR, $obj32->getCode());
		$this->assertEquals(SMSModeCreateSubaccountResponse::DESC_AUTHENTICATION_ERROR, $obj32->getDescription());

		$obj35 = new SMSModeCreateSubaccountResponse(implode($impl, [SMSModeCreateSubaccountResponse::CODE_MISSING_REQUIRED_PARAMETER, SMSModeCreateSubaccountResponse::DESC_MISSING_REQUIRED_PARAMETER]));

		$this->assertEquals(SMSModeCreateSubaccountResponse::CODE_MISSING_REQUIRED_PARAMETER, $obj35->getCode());
		$this->assertEquals(SMSModeCreateSubaccountResponse::DESC_MISSING_REQUIRED_PARAMETER, $obj35->getDescription());

		$obj41 = new SMSModeCreateSubaccountResponse(implode($impl, [SMSModeCreateSubaccountResponse::CODE_ID_ALREADY_EXISTS, SMSModeCreateSubaccountResponse::DESC_ID_ALREADY_EXISTS]));

		$this->assertEquals(SMSModeCreateSubaccountResponse::CODE_ID_ALREADY_EXISTS, $obj41->getCode());
		$this->assertEquals(SMSModeCreateSubaccountResponse::DESC_ID_ALREADY_EXISTS, $obj41->getDescription());
	}

}
