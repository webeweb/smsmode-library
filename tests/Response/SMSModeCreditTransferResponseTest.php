<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Response;

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\API\SMSModeResponseInterface;
use WBW\Library\SMSMode\Response\SMSModeCreditTransferResponse;

/**
 * sMsmode credit transfer response test.
 *
 * @author webeweb <https://github.com/webeweb/>
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

        $this->assertNull($objEx->getCode());
        $this->assertNull($objEx->getDescription());

        $impl = " " . SMSModeResponseInterface::RESPONSE_DELIMITER . " ";

        $obj0 = new SMSModeCreditTransferResponse(implode($impl, [SMSModeCreditTransferResponse::RESPONSE_CODE_TRANSFER_CARRIED_OUT, SMSModeCreditTransferResponse::RESPONSE_DESC_TRANSFER_CARRIED_OUT]));

        $this->assertEquals(SMSModeCreditTransferResponse::RESPONSE_CODE_TRANSFER_CARRIED_OUT, $obj0->getCode());
        $this->assertEquals(SMSModeCreditTransferResponse::RESPONSE_DESC_TRANSFER_CARRIED_OUT, $obj0->getDescription());

        $obj31 = new SMSModeCreditTransferResponse(implode($impl, [SMSModeCreditTransferResponse::RESPONSE_CODE_INTERNAL_ERROR, SMSModeCreditTransferResponse::RESPONSE_DESC_INTERNAL_ERROR]));

        $this->assertEquals(SMSModeCreditTransferResponse::RESPONSE_CODE_INTERNAL_ERROR, $obj31->getCode());
        $this->assertEquals(SMSModeCreditTransferResponse::RESPONSE_DESC_INTERNAL_ERROR, $obj31->getDescription());

        $obj32 = new SMSModeCreditTransferResponse(implode($impl, [SMSModeCreditTransferResponse::RESPONSE_CODE_AUTHENTICATION_ERROR, SMSModeCreditTransferResponse::RESPONSE_DESC_AUTHENTICATION_ERROR]));

        $this->assertEquals(SMSModeCreditTransferResponse::RESPONSE_CODE_AUTHENTICATION_ERROR, $obj32->getCode());
        $this->assertEquals(SMSModeCreditTransferResponse::RESPONSE_DESC_AUTHENTICATION_ERROR, $obj32->getDescription());

        $obj33 = new SMSModeCreditTransferResponse(implode($impl, [SMSModeCreditTransferResponse::RESPONSE_CODE_INSUFICIENT_CREDIT, SMSModeCreditTransferResponse::RESPONSE_DESC_INSUFICIENT_CREDIT]));

        $this->assertEquals(SMSModeCreditTransferResponse::RESPONSE_CODE_INSUFICIENT_CREDIT, $obj33->getCode());
        $this->assertEquals(SMSModeCreditTransferResponse::RESPONSE_DESC_INSUFICIENT_CREDIT, $obj33->getDescription());

        $obj35 = new SMSModeCreditTransferResponse(implode($impl, [SMSModeCreditTransferResponse::RESPONSE_CODE_MISSING_REQUIRED_PARAMETER, SMSModeCreditTransferResponse::RESPONSE_DESC_MISSING_REQUIRED_PARAMETER]));

        $this->assertEquals(SMSModeCreditTransferResponse::RESPONSE_CODE_MISSING_REQUIRED_PARAMETER, $obj35->getCode());
        $this->assertEquals(SMSModeCreditTransferResponse::RESPONSE_DESC_MISSING_REQUIRED_PARAMETER, $obj35->getDescription());

        $obj41 = new SMSModeCreditTransferResponse(implode($impl, [SMSModeCreditTransferResponse::RESPONSE_CODE_ID_ALREADY_EXISTS, SMSModeCreditTransferResponse::RESPONSE_DESC_ID_ALREADY_EXISTS]));

        $this->assertEquals(SMSModeCreditTransferResponse::RESPONSE_CODE_ID_ALREADY_EXISTS, $obj41->getCode());
        $this->assertEquals(SMSModeCreditTransferResponse::RESPONSE_DESC_ID_ALREADY_EXISTS, $obj41->getDescription());
    }

}
