<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Api;

use WBW\Library\SmsMode\Api\SmsReplyCallbackInterface;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * SMS reply interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Api
 */
class SmsReplyInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("date_reception", SmsReplyCallbackInterface::PARAMETER_DATE_RECEPTION);
        $this->assertEquals("emetteur", SmsReplyCallbackInterface::PARAMETER_EMETTEUR);
        $this->assertEquals("message", SmsReplyCallbackInterface::PARAMETER_MESSAGE);
        $this->assertEquals("numero", SmsReplyCallbackInterface::PARAMETER_NUMERO);
        $this->assertEquals("refClient", SmsReplyCallbackInterface::PARAMETER_REF_CLIENT);
        $this->assertEquals("responseID", SmsReplyCallbackInterface::PARAMETER_RESPONSE_ID);
        $this->assertEquals("smsID", SmsReplyCallbackInterface::PARAMETER_SMS_ID);
    }
}
