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
use WBW\Library\SMSMode\Response\SMSModeCreateSubaccountResponse;
use WBW\Library\SMSMode\Tests\Cases\AbstractSMSModeFrameworkTestCase;

/**
 * sMsmode create subaccount response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 * @final
 */
final class SMSModeCreateSubaccountResponseTest extends AbstractSMSModeFrameworkTestCase {

    /**
     * Tests the parse() method.
     *
     * @return void
     */
    public function testParse() {

        $objEx = new SMSModeCreateSubaccountResponse("exception");

        $this->assertNull($objEx->getCode());
        $this->assertNull($objEx->getDescription());

        $impl = " " . SMSModeResponseInterface::RESPONSE_DELIMITER . " ";

        $obj0 = new SMSModeCreateSubaccountResponse(implode($impl, [SMSModeCreateSubaccountResponse::RESPONSE_CODE_CREATED, SMSModeCreateSubaccountResponse::RESPONSE_DESC_CREATED]));

        $this->assertEquals(SMSModeCreateSubaccountResponse::RESPONSE_CODE_CREATED, $obj0->getCode());
        $this->assertEquals(SMSModeCreateSubaccountResponse::RESPONSE_DESC_CREATED, $obj0->getDescription());

        $obj31 = new SMSModeCreateSubaccountResponse(implode($impl, [SMSModeCreateSubaccountResponse::RESPONSE_CODE_INTERNAL_ERROR, SMSModeCreateSubaccountResponse::RESPONSE_DESC_INTERNAL_ERROR]));

        $this->assertEquals(SMSModeCreateSubaccountResponse::RESPONSE_CODE_INTERNAL_ERROR, $obj31->getCode());
        $this->assertEquals(SMSModeCreateSubaccountResponse::RESPONSE_DESC_INTERNAL_ERROR, $obj31->getDescription());

        $obj32 = new SMSModeCreateSubaccountResponse(implode($impl, [SMSModeCreateSubaccountResponse::RESPONSE_CODE_AUTHENTICATION_ERROR, SMSModeCreateSubaccountResponse::RESPONSE_DESC_AUTHENTICATION_ERROR]));

        $this->assertEquals(SMSModeCreateSubaccountResponse::RESPONSE_CODE_AUTHENTICATION_ERROR, $obj32->getCode());
        $this->assertEquals(SMSModeCreateSubaccountResponse::RESPONSE_DESC_AUTHENTICATION_ERROR, $obj32->getDescription());

        $obj35 = new SMSModeCreateSubaccountResponse(implode($impl, [SMSModeCreateSubaccountResponse::RESPONSE_CODE_MISSING_REQUIRED_PARAMETER, SMSModeCreateSubaccountResponse::RESPONSE_DESC_MISSING_REQUIRED_PARAMETER]));

        $this->assertEquals(SMSModeCreateSubaccountResponse::RESPONSE_CODE_MISSING_REQUIRED_PARAMETER, $obj35->getCode());
        $this->assertEquals(SMSModeCreateSubaccountResponse::RESPONSE_DESC_MISSING_REQUIRED_PARAMETER, $obj35->getDescription());

        $obj41 = new SMSModeCreateSubaccountResponse(implode($impl, [SMSModeCreateSubaccountResponse::RESPONSE_CODE_ID_ALREADY_EXISTS, SMSModeCreateSubaccountResponse::RESPONSE_DESC_ID_ALREADY_EXISTS]));

        $this->assertEquals(SMSModeCreateSubaccountResponse::RESPONSE_CODE_ID_ALREADY_EXISTS, $obj41->getCode());
        $this->assertEquals(SMSModeCreateSubaccountResponse::RESPONSE_DESC_ID_ALREADY_EXISTS, $obj41->getDescription());
    }

}
