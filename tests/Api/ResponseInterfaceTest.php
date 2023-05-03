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

use WBW\Library\SmsMode\Api\ResponseInterface;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Response interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Api
 */
class ResponseInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(0, ResponseInterface::RESPONSE_CODE_0);
        $this->assertEquals(1, ResponseInterface::RESPONSE_CODE_1);
        $this->assertEquals(2, ResponseInterface::RESPONSE_CODE_2);
        $this->assertEquals(10, ResponseInterface::RESPONSE_CODE_10);
        $this->assertEquals(11, ResponseInterface::RESPONSE_CODE_11);
        $this->assertEquals(12, ResponseInterface::RESPONSE_CODE_12);
        $this->assertEquals(13, ResponseInterface::RESPONSE_CODE_13);
        $this->assertEquals(14, ResponseInterface::RESPONSE_CODE_14);
        $this->assertEquals(15, ResponseInterface::RESPONSE_CODE_15);
        $this->assertEquals(16, ResponseInterface::RESPONSE_CODE_16);
        $this->assertEquals(21, ResponseInterface::RESPONSE_CODE_21);
        $this->assertEquals(22, ResponseInterface::RESPONSE_CODE_22);
        $this->assertEquals(33, ResponseInterface::RESPONSE_CODE_33);
        $this->assertEquals(34, ResponseInterface::RESPONSE_CODE_34);
        $this->assertEquals(35, ResponseInterface::RESPONSE_CODE_35);
        $this->assertEquals(36, ResponseInterface::RESPONSE_CODE_36);
        $this->assertEquals(37, ResponseInterface::RESPONSE_CODE_37);
        $this->assertEquals(38, ResponseInterface::RESPONSE_CODE_38);
        $this->assertEquals(50, ResponseInterface::RESPONSE_CODE_50);
        $this->assertEquals(40, ResponseInterface::RESPONSE_CODE_40);
        $this->assertEquals(100, ResponseInterface::RESPONSE_CODE_100);
        $this->assertEquals(101, ResponseInterface::RESPONSE_CODE_101);
        $this->assertEquals(999, ResponseInterface::RESPONSE_CODE_999);
        $this->assertEquals(3501, ResponseInterface::RESPONSE_CODE_3501);
        $this->assertEquals(3502, ResponseInterface::RESPONSE_CODE_3502);
        $this->assertEquals(3503, ResponseInterface::RESPONSE_CODE_3503);
        $this->assertEquals(3504, ResponseInterface::RESPONSE_CODE_3504);
        $this->assertEquals(3521, ResponseInterface::RESPONSE_CODE_3521);
        $this->assertEquals(3522, ResponseInterface::RESPONSE_CODE_3522);
        $this->assertEquals(3523, ResponseInterface::RESPONSE_CODE_3523);
        $this->assertEquals(3524, ResponseInterface::RESPONSE_CODE_3524);
        $this->assertEquals(3525, ResponseInterface::RESPONSE_CODE_3525);
        $this->assertEquals(3526, ResponseInterface::RESPONSE_CODE_3526);
        $this->assertEquals(3527, ResponseInterface::RESPONSE_CODE_3527);
        $this->assertEquals(3560, ResponseInterface::RESPONSE_CODE_3560);
        $this->assertEquals(3599, ResponseInterface::RESPONSE_CODE_3599);
        $this->assertEquals(3998, ResponseInterface::RESPONSE_CODE_3998);
        $this->assertEquals(3999, ResponseInterface::RESPONSE_CODE_3999);

        $this->assertEquals("Sent", ResponseInterface::RESPONSE_DESCRIPTION_0);
        $this->assertEquals("In progress", ResponseInterface::RESPONSE_DESCRIPTION_1);
        $this->assertEquals("Internal error", ResponseInterface::RESPONSE_DESCRIPTION_2);
        $this->assertEquals("Programmed", ResponseInterface::RESPONSE_DESCRIPTION_10);
        $this->assertEquals("Received", ResponseInterface::RESPONSE_DESCRIPTION_11);
        $this->assertEquals("Partially delivered", ResponseInterface::RESPONSE_DESCRIPTION_12);
        $this->assertEquals("Issued operator (temporary status)", ResponseInterface::RESPONSE_DESCRIPTION_13);
        $this->assertEquals("Issued", ResponseInterface::RESPONSE_DESCRIPTION_14);
        $this->assertEquals("Partially received", ResponseInterface::RESPONSE_DESCRIPTION_15);
        $this->assertEquals("Listened", ResponseInterface::RESPONSE_DESCRIPTION_16);
        $this->assertEquals("Not deliverable", ResponseInterface::RESPONSE_DESCRIPTION_21);
        $this->assertEquals("Rejected", ResponseInterface::RESPONSE_DESCRIPTION_22);
        $this->assertEquals("Not sent - insufficient credit", ResponseInterface::RESPONSE_DESCRIPTION_33);
        $this->assertEquals("Routing error", ResponseInterface::RESPONSE_DESCRIPTION_34);
        $this->assertEquals("Reception error", ResponseInterface::RESPONSE_DESCRIPTION_35);
        $this->assertEquals("Message error", ResponseInterface::RESPONSE_DESCRIPTION_36);
        $this->assertEquals("Expired message", ResponseInterface::RESPONSE_DESCRIPTION_37);
        $this->assertEquals("Message too long", ResponseInterface::RESPONSE_DESCRIPTION_38);
        $this->assertEquals("Not delivered", ResponseInterface::RESPONSE_DESCRIPTION_50);
        $this->assertEquals("Model", ResponseInterface::RESPONSE_DESCRIPTION_40);
        $this->assertEquals("Read", ResponseInterface::RESPONSE_DESCRIPTION_100);
        $this->assertEquals("Not read", ResponseInterface::RESPONSE_DESCRIPTION_101);
        $this->assertEquals("Undefined", ResponseInterface::RESPONSE_DESCRIPTION_999);
        $this->assertEquals("Temporary operator error", ResponseInterface::RESPONSE_DESCRIPTION_3501);
        $this->assertEquals("Temporary absence error", ResponseInterface::RESPONSE_DESCRIPTION_3502);
        $this->assertEquals("Temporary phone error", ResponseInterface::RESPONSE_DESCRIPTION_3503);
        $this->assertEquals("Temporary portability error", ResponseInterface::RESPONSE_DESCRIPTION_3504);
        $this->assertEquals("Permanent operator error", ResponseInterface::RESPONSE_DESCRIPTION_3521);
        $this->assertEquals("Permanent absence error", ResponseInterface::RESPONSE_DESCRIPTION_3522);
        $this->assertEquals("Permanent phone error", ResponseInterface::RESPONSE_DESCRIPTION_3523);
        $this->assertEquals("Permanent anti-spam error", ResponseInterface::RESPONSE_DESCRIPTION_3524);
        $this->assertEquals("Permanent content error", ResponseInterface::RESPONSE_DESCRIPTION_3525);
        $this->assertEquals("Permanent portability error", ResponseInterface::RESPONSE_DESCRIPTION_3526);
        $this->assertEquals("Permanent roaming error", ResponseInterface::RESPONSE_DESCRIPTION_3527);
        $this->assertEquals("Non-routable error", ResponseInterface::RESPONSE_DESCRIPTION_3560);
        $this->assertEquals("Other error", ResponseInterface::RESPONSE_DESCRIPTION_3599);
        $this->assertEquals("Invalid recipient", ResponseInterface::RESPONSE_DESCRIPTION_3998);
        $this->assertEquals("Blacklisted recipient", ResponseInterface::RESPONSE_DESCRIPTION_3999);

        $this->assertEquals("dmY", ResponseInterface::RESPONSE_DATE_FORMAT);
        $this->assertEquals("dmY-H:i", ResponseInterface::RESPONSE_DATETIME_FORMAT);
        $this->assertEquals("|", ResponseInterface::RESPONSE_DELIMITER);
    }
}
