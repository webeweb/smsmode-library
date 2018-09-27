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

use WBW\Library\SMSMode\API\SMSModeResponseInterface;
use WBW\Library\SMSMode\Response\SMSModeSendSMSResponse;
use WBW\Library\SMSMode\Tests\AbstractFrameworkTestCase;

/**
 * sMsmode send SMS response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 * @final
 */
final class SMSModeSendSMSResponseTest extends AbstractFrameworkTestCase {

    /**
     * Tests the parse() method.
     *
     * @return void
     */
    public function testParse() {

        $objEx = new SMSModeSendSMSResponse("exception");

        $this->assertNull($objEx->getCode());
        $this->assertNull($objEx->getDescription());
        $this->assertNull($objEx->getSmsID());

        $impl = " " . SMSModeResponseInterface::RESPONSE_DELIMITER . " ";

        $obj0 = new SMSModeSendSMSResponse(implode($impl, [SMSModeSendSMSResponse::RESPONSE_CODE_ACCEPTED, SMSModeSendSMSResponse::RESPONSE_DESC_ACCEPTED, "smsID"]));

        $this->assertEquals(SMSModeSendSMSResponse::RESPONSE_CODE_ACCEPTED, $obj0->getCode());
        $this->assertEquals(SMSModeSendSMSResponse::RESPONSE_DESC_ACCEPTED, $obj0->getDescription());
        $this->assertEquals("smsID", $obj0->getSmsID());

        $obj31 = new SMSModeSendSMSResponse(implode($impl, [SMSModeSendSMSResponse::RESPONSE_CODE_INTERNAL_ERROR, SMSModeSendSMSResponse::RESPONSE_DESC_INTERNAL_ERROR]));

        $this->assertEquals(SMSModeSendSMSResponse::RESPONSE_CODE_INTERNAL_ERROR, $obj31->getCode());
        $this->assertEquals(SMSModeSendSMSResponse::RESPONSE_DESC_INTERNAL_ERROR, $obj31->getDescription());
        $this->assertNull($obj31->getSmsID(), "The method parse() does not return the expected sms id");

        $obj32 = new SMSModeSendSMSResponse(implode($impl, [SMSModeSendSMSResponse::RESPONSE_CODE_AUTHENTICATION_ERROR, SMSModeSendSMSResponse::RESPONSE_DESC_AUTHENTICATION_ERROR]));

        $this->assertEquals(SMSModeSendSMSResponse::RESPONSE_CODE_AUTHENTICATION_ERROR, $obj32->getCode());
        $this->assertEquals(SMSModeSendSMSResponse::RESPONSE_DESC_AUTHENTICATION_ERROR, $obj32->getDescription());
        $this->assertNull($obj32->getSmsID(), "The method parse() does not return the expected sms id");

        $obj33 = new SMSModeSendSMSResponse(implode($impl, [SMSModeSendSMSResponse::RESPONSE_CODE_INSUFICIENT_CREDIT, SMSModeSendSMSResponse::RESPONSE_DESC_INSUFICIENT_CREDIT]));

        $this->assertEquals(SMSModeSendSMSResponse::RESPONSE_CODE_INSUFICIENT_CREDIT, $obj33->getCode());
        $this->assertEquals(SMSModeSendSMSResponse::RESPONSE_DESC_INSUFICIENT_CREDIT, $obj33->getDescription());
        $this->assertNull($obj33->getSmsID(), "The method parse() does not return the expected sms id");

        $obj35 = new SMSModeSendSMSResponse(implode($impl, [SMSModeSendSMSResponse::RESPONSE_CODE_MISSING_REQUIRED_PARAMETER, SMSModeSendSMSResponse::RESPONSE_DESC_MISSING_REQUIRED_PARAMETER]));

        $this->assertEquals(SMSModeSendSMSResponse::RESPONSE_CODE_MISSING_REQUIRED_PARAMETER, $obj35->getCode());
        $this->assertEquals(SMSModeSendSMSResponse::RESPONSE_DESC_MISSING_REQUIRED_PARAMETER, $obj35->getDescription());
        $this->assertNull($obj35->getSmsID(), "The method parse() does not return the expected sms id");

        $obj50 = new SMSModeSendSMSResponse(implode($impl, [SMSModeSendSMSResponse::RESPONSE_CODE_TEMPORALY_UNAVAILABLE, SMSModeSendSMSResponse::RESPONSE_DESC_TEMPORALY_UNAVAILABLE]));

        $this->assertEquals(SMSModeSendSMSResponse::RESPONSE_CODE_TEMPORALY_UNAVAILABLE, $obj50->getCode());
        $this->assertEquals(SMSModeSendSMSResponse::RESPONSE_DESC_TEMPORALY_UNAVAILABLE, $obj50->getDescription());
        $this->assertNull($obj50->getSmsID(), "The method parse() does not return the expected sms id");
    }

}
