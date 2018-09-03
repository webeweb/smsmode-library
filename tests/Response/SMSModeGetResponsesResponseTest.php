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

use DateTime;
use WBW\Library\SMSMode\API\SMSModeResponseInterface;
use WBW\Library\SMSMode\Response\SMSModeGetResponsesResponse;
use WBW\Library\SMSMode\Tests\Cases\AbstractSMSModeFrameworkTestCase;

/**
 * sMsmode get responses response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 * @final
 */
final class SMSModeGetResponsesResponseTest extends AbstractSMSModeFrameworkTestCase {

    /**
     * Tests the parse() method.
     *
     * @return void
     */
    public function testParse() {

        $objEx = new SMSModeGetResponsesResponse("exception");

        $this->assertNull($objEx->getCode());
        $this->assertNull($objEx->getDescription());

        $this->assertNull($objEx->getResponseID());
        $this->assertNull($objEx->getReceptionDate());
        $this->assertNull($objEx->getFrom());
        $this->assertNull($objEx->getText());
        $this->assertNull($objEx->getTo());
        $this->assertNull($objEx->getMessageID());

        $impl = " " . SMSModeResponseInterface::RESPONSE_DELIMITER . " ";

        $obj31 = new SMSModeGetResponsesResponse(implode($impl, [SMSModeGetResponsesResponse::RESPONSE_CODE_AUTHENTICATION_ERROR, SMSModeGetResponsesResponse::RESPONSE_DESC_AUTHENTICATION_ERROR]));

        $this->assertEquals(SMSModeGetResponsesResponse::RESPONSE_CODE_AUTHENTICATION_ERROR, $obj31->getCode());
        $this->assertEquals(SMSModeGetResponsesResponse::RESPONSE_DESC_AUTHENTICATION_ERROR, $obj31->getDescription());

        $this->assertNull($obj31->getResponseID());
        $this->assertNull($obj31->getReceptionDate());
        $this->assertNull($obj31->getFrom());
        $this->assertNull($obj31->getText());
        $this->assertNull($obj31->getTo());
        $this->assertNull($obj31->getMessageID());

        $obj35 = new SMSModeGetResponsesResponse(implode($impl, [SMSModeGetResponsesResponse::RESPONSE_CODE_MISSING_REQUIRED_PARAMETER, SMSModeGetResponsesResponse::RESPONSE_DESC_MISSING_REQUIRED_PARAMETER]));

        $this->assertEquals(SMSModeGetResponsesResponse::RESPONSE_CODE_MISSING_REQUIRED_PARAMETER, $obj35->getCode());
        $this->assertEquals(SMSModeGetResponsesResponse::RESPONSE_DESC_MISSING_REQUIRED_PARAMETER, $obj35->getDescription());

        $this->assertNull($obj35->getResponseID());
        $this->assertNull($obj35->getReceptionDate());
        $this->assertNull($obj35->getFrom());
        $this->assertNull($obj35->getText());
        $this->assertNull($obj35->getTo());
        $this->assertNull($obj35->getMessageID());

        $obj = new SMSModeGetResponsesResponse(implode($impl, ["responseID", "14092017-14:00", "from", "text", "to", "messageID"]));

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertEquals("responseID", $obj->getResponseID());
        $this->assertEquals(new DateTime("2017-09-14 14:00:00"), $obj->getReceptionDate());
        $this->assertEquals("from", $obj->getFrom());
        $this->assertEquals("text", $obj->getText());
        $this->assertEquals("to", $obj->getTo());
        $this->assertEquals("messageID", $obj->getMessageID());

        $err = new SMSModeGetResponsesResponse("");

        $this->assertNull($err->getCode());
        $this->assertNull($err->getDescription());

        $this->assertEquals("", $err->getResponseID());
        $this->assertNull($err->getReceptionDate());
        $this->assertNull($err->getFrom());
        $this->assertNull($err->getText());
        $this->assertNull($err->getTo());
        $this->assertNull($err->getMessageID());
    }

}
