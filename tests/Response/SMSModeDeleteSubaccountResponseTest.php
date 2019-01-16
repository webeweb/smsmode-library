<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Response;

use WBW\Library\SMSMode\API\SMSModeResponseInterface;
use WBW\Library\SMSMode\Response\SMSModeDeleteSubaccountResponse;
use WBW\Library\SMSMode\Tests\AbstractFrameworkTestCase;

/**
 * sMsmode delete subaccount response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 */
class SMSModeDeleteSubaccountResponseTest extends AbstractFrameworkTestCase {

    /**
     * Tests the parse() method.
     *
     * @return void
     */
    public function testParse() {

        $objEx = new SMSModeDeleteSubaccountResponse("excpetion");

        $this->assertNull($objEx->getCode());
        $this->assertNull($objEx->getDescription());

        $impl = " " . SMSModeResponseInterface::RESPONSE_DELIMITER . " ";

        $obj0 = new SMSModeDeleteSubaccountResponse(implode($impl, [SMSModeDeleteSubaccountResponse::RESPONSE_CODE_CREATED, SMSModeDeleteSubaccountResponse::RESPONSE_DESC_CREATED]));

        $this->assertEquals(SMSModeDeleteSubaccountResponse::RESPONSE_CODE_CREATED, $obj0->getCode());
        $this->assertEquals(SMSModeDeleteSubaccountResponse::RESPONSE_DESC_CREATED, $obj0->getDescription());

        $obj31 = new SMSModeDeleteSubaccountResponse(implode($impl, [SMSModeDeleteSubaccountResponse::RESPONSE_CODE_INTERNAL_ERROR, SMSModeDeleteSubaccountResponse::RESPONSE_DESC_INTERNAL_ERROR]));

        $this->assertEquals(SMSModeDeleteSubaccountResponse::RESPONSE_CODE_INTERNAL_ERROR, $obj31->getCode());
        $this->assertEquals(SMSModeDeleteSubaccountResponse::RESPONSE_DESC_INTERNAL_ERROR, $obj31->getDescription());

        $obj32 = new SMSModeDeleteSubaccountResponse(implode($impl, [SMSModeDeleteSubaccountResponse::RESPONSE_CODE_AUTHENTICATION_ERROR, SMSModeDeleteSubaccountResponse::RESPONSE_DESC_AUTHENTICATION_ERROR]));

        $this->assertEquals(SMSModeDeleteSubaccountResponse::RESPONSE_CODE_AUTHENTICATION_ERROR, $obj32->getCode());
        $this->assertEquals(SMSModeDeleteSubaccountResponse::RESPONSE_DESC_AUTHENTICATION_ERROR, $obj32->getDescription());

        $obj35 = new SMSModeDeleteSubaccountResponse(implode($impl, [SMSModeDeleteSubaccountResponse::RESPONSE_CODE_MISSING_REQUIRED_PARAMETER, SMSModeDeleteSubaccountResponse::RESPONSE_DESC_MISSING_REQUIRED_PARAMETER]));

        $this->assertEquals(SMSModeDeleteSubaccountResponse::RESPONSE_CODE_MISSING_REQUIRED_PARAMETER, $obj35->getCode());
        $this->assertEquals(SMSModeDeleteSubaccountResponse::RESPONSE_DESC_MISSING_REQUIRED_PARAMETER, $obj35->getDescription());

        $obj41 = new SMSModeDeleteSubaccountResponse(implode($impl, [SMSModeDeleteSubaccountResponse::RESPONSE_CODE_ID_ALREADY_EXISTS, SMSModeDeleteSubaccountResponse::RESPONSE_DESC_ID_ALREADY_EXISTS]));

        $this->assertEquals(SMSModeDeleteSubaccountResponse::RESPONSE_CODE_ID_ALREADY_EXISTS, $obj41->getCode());
        $this->assertEquals(SMSModeDeleteSubaccountResponse::RESPONSE_DESC_ID_ALREADY_EXISTS, $obj41->getDescription());
    }
}
