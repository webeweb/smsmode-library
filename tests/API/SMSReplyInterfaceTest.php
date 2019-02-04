<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\API;

use WBW\Library\SMSMode\API\SMSReplyCallbackInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * SMS reply interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\API
 */
class SMSReplyInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("date_reception", SMSReplyCallbackInterface::PARAMETER_DATE_RECEPTION);
        $this->assertEquals("emetteur", SMSReplyCallbackInterface::PARAMETER_EMETTEUR);
        $this->assertEquals("message", SMSReplyCallbackInterface::PARAMETER_MESSAGE);
        $this->assertEquals("numero", SMSReplyCallbackInterface::PARAMETER_NUMERO);
        $this->assertEquals("refClient", SMSReplyCallbackInterface::PARAMETER_REF_CLIENT);
        $this->assertEquals("responseID", SMSReplyCallbackInterface::PARAMETER_RESPONSE_ID);
        $this->assertEquals("smsID", SMSReplyCallbackInterface::PARAMETER_SMS_ID);
    }
}
