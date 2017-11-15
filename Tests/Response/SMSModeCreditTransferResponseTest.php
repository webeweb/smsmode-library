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
use WBW\Library\SMSMode\Response\SMSModeCreditTransferResponse;
use WBW\Library\SMSMode\Response\SMSModeResponseInterface;

/**
 * sMsmode credit transfer response test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 * @final
 */
final class SMSModeCreditTransferResponseTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the parse() method.
	 *
	 * @return void
	 */
	public function testParse() {

		$objEx = new SMSModeCreditTransferResponse("exception");

		$this->assertEquals(null, $objEx->getCode());
		$this->assertEquals(null, $objEx->getDescription());

		$impl = " " . SMSModeResponseInterface::RESPONSE_DELIMITER . " ";

		$obj0 = new SMSModeCreditTransferResponse(implode($impl, [SMSModeCreditTransferResponse::CODE_TRANSFER_CARRIED_OUT, SMSModeCreditTransferResponse::DESC_TRANSFER_CARRIED_OUT]));

		$this->assertEquals(SMSModeCreditTransferResponse::CODE_TRANSFER_CARRIED_OUT, $obj0->getCode());
		$this->assertEquals(SMSModeCreditTransferResponse::DESC_TRANSFER_CARRIED_OUT, $obj0->getDescription());

		$obj31 = new SMSModeCreditTransferResponse(implode($impl, [SMSModeCreditTransferResponse::CODE_INTERNAL_ERROR, SMSModeCreditTransferResponse::DESC_INTERNAL_ERROR]));

		$this->assertEquals(SMSModeCreditTransferResponse::CODE_INTERNAL_ERROR, $obj31->getCode());
		$this->assertEquals(SMSModeCreditTransferResponse::DESC_INTERNAL_ERROR, $obj31->getDescription());

		$obj32 = new SMSModeCreditTransferResponse(implode($impl, [SMSModeCreditTransferResponse::CODE_AUTHENTICATION_ERROR, SMSModeCreditTransferResponse::DESC_AUTHENTICATION_ERROR]));

		$this->assertEquals(SMSModeCreditTransferResponse::CODE_AUTHENTICATION_ERROR, $obj32->getCode());
		$this->assertEquals(SMSModeCreditTransferResponse::DESC_AUTHENTICATION_ERROR, $obj32->getDescription());

		$obj33 = new SMSModeCreditTransferResponse(implode($impl, [SMSModeCreditTransferResponse::CODE_INSUFICIENT_CREDIT, SMSModeCreditTransferResponse::DESC_INSUFICIENT_CREDIT]));

		$this->assertEquals(SMSModeCreditTransferResponse::CODE_INSUFICIENT_CREDIT, $obj33->getCode());
		$this->assertEquals(SMSModeCreditTransferResponse::DESC_INSUFICIENT_CREDIT, $obj33->getDescription());

		$obj35 = new SMSModeCreditTransferResponse(implode($impl, [SMSModeCreditTransferResponse::CODE_MISSING_REQUIRED_PARAMETER, SMSModeCreditTransferResponse::DESC_MISSING_REQUIRED_PARAMETER]));

		$this->assertEquals(SMSModeCreditTransferResponse::CODE_MISSING_REQUIRED_PARAMETER, $obj35->getCode());
		$this->assertEquals(SMSModeCreditTransferResponse::DESC_MISSING_REQUIRED_PARAMETER, $obj35->getDescription());

		$obj41 = new SMSModeCreditTransferResponse(implode($impl, [SMSModeCreditTransferResponse::CODE_ID_ALREADY_EXISTS, SMSModeCreditTransferResponse::DESC_ID_ALREADY_EXISTS]));

		$this->assertEquals(SMSModeCreditTransferResponse::CODE_ID_ALREADY_EXISTS, $obj41->getCode());
		$this->assertEquals(SMSModeCreditTransferResponse::DESC_ID_ALREADY_EXISTS, $obj41->getDescription());
	}

}
