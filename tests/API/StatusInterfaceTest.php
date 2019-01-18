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

use WBW\Library\SMSMode\API\StatusInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Status interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\API
 */
class StatusInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals(0, StatusInterface::STATUS_CODE_0);
        $this->assertEquals(1, StatusInterface::STATUS_CODE_1);
        $this->assertEquals(2, StatusInterface::STATUS_CODE_2);
        $this->assertEquals(10, StatusInterface::STATUS_CODE_10);
        $this->assertEquals(11, StatusInterface::STATUS_CODE_11);
        $this->assertEquals(12, StatusInterface::STATUS_CODE_12);
        $this->assertEquals(13, StatusInterface::STATUS_CODE_13);
        $this->assertEquals(14, StatusInterface::STATUS_CODE_14);
        $this->assertEquals(15, StatusInterface::STATUS_CODE_15);
        $this->assertEquals(16, StatusInterface::STATUS_CODE_16);
        $this->assertEquals(21, StatusInterface::STATUS_CODE_21);
        $this->assertEquals(22, StatusInterface::STATUS_CODE_22);
        $this->assertEquals(33, StatusInterface::STATUS_CODE_33);
        $this->assertEquals(34, StatusInterface::STATUS_CODE_34);
        $this->assertEquals(35, StatusInterface::STATUS_CODE_35);
        $this->assertEquals(36, StatusInterface::STATUS_CODE_36);
        $this->assertEquals(37, StatusInterface::STATUS_CODE_37);
        $this->assertEquals(38, StatusInterface::STATUS_CODE_38);
        $this->assertEquals(50, StatusInterface::STATUS_CODE_50);
        $this->assertEquals(40, StatusInterface::STATUS_CODE_40);
        $this->assertEquals(100, StatusInterface::STATUS_CODE_100);
        $this->assertEquals(101, StatusInterface::STATUS_CODE_101);
        $this->assertEquals(999, StatusInterface::STATUS_CODE_999);
        $this->assertEquals(3501, StatusInterface::STATUS_CODE_3501);
        $this->assertEquals(3502, StatusInterface::STATUS_CODE_3502);
        $this->assertEquals(3503, StatusInterface::STATUS_CODE_3503);
        $this->assertEquals(3504, StatusInterface::STATUS_CODE_3504);
        $this->assertEquals(3521, StatusInterface::STATUS_CODE_3521);
        $this->assertEquals(3522, StatusInterface::STATUS_CODE_3522);
        $this->assertEquals(3523, StatusInterface::STATUS_CODE_3523);
        $this->assertEquals(3524, StatusInterface::STATUS_CODE_3524);
        $this->assertEquals(3525, StatusInterface::STATUS_CODE_3525);
        $this->assertEquals(3526, StatusInterface::STATUS_CODE_3526);
        $this->assertEquals(3527, StatusInterface::STATUS_CODE_3527);
        $this->assertEquals(3560, StatusInterface::STATUS_CODE_3560);
        $this->assertEquals(3599, StatusInterface::STATUS_CODE_3599);
        $this->assertEquals(3998, StatusInterface::STATUS_CODE_3998);
        $this->assertEquals(3999, StatusInterface::STATUS_CODE_3999);

        $this->assertEquals("Sent", StatusInterface::STATUS_DESCRIPTION_0);
        $this->assertEquals("In progress", StatusInterface::STATUS_DESCRIPTION_1);
        $this->assertEquals("Internal error", StatusInterface::STATUS_DESCRIPTION_2);
        $this->assertEquals("Programmed", StatusInterface::STATUS_DESCRIPTION_10);
        $this->assertEquals("Received", StatusInterface::STATUS_DESCRIPTION_11);
        $this->assertEquals("Partially delivered", StatusInterface::STATUS_DESCRIPTION_12);
        $this->assertEquals("Issued operator (temporary status)", StatusInterface::STATUS_DESCRIPTION_13);
        $this->assertEquals("Issued", StatusInterface::STATUS_DESCRIPTION_14);
        $this->assertEquals("Partially received", StatusInterface::STATUS_DESCRIPTION_15);
        $this->assertEquals("Listened", StatusInterface::STATUS_DESCRIPTION_16);
        $this->assertEquals("Not deliverable", StatusInterface::STATUS_DESCRIPTION_21);
        $this->assertEquals("Rejected", StatusInterface::STATUS_DESCRIPTION_22);
        $this->assertEquals("Not sent - insufficient credit", StatusInterface::STATUS_DESCRIPTION_33);
        $this->assertEquals("Routing error", StatusInterface::STATUS_DESCRIPTION_34);
        $this->assertEquals("Reception error", StatusInterface::STATUS_DESCRIPTION_35);
        $this->assertEquals("Message error", StatusInterface::STATUS_DESCRIPTION_36);
        $this->assertEquals("Expired message", StatusInterface::STATUS_DESCRIPTION_37);
        $this->assertEquals("Message too long", StatusInterface::STATUS_DESCRIPTION_38);
        $this->assertEquals("Not delivered", StatusInterface::STATUS_DESCRIPTION_50);
        $this->assertEquals("Model", StatusInterface::STATUS_DESCRIPTION_40);
        $this->assertEquals("Read", StatusInterface::STATUS_DESCRIPTION_100);
        $this->assertEquals("Not read", StatusInterface::STATUS_DESCRIPTION_101);
        $this->assertEquals("Undefined", StatusInterface::STATUS_DESCRIPTION_999);
        $this->assertEquals("Temporary operator error", StatusInterface::STATUS_DESCRIPTION_3501);
        $this->assertEquals("Temporary absence error", StatusInterface::STATUS_DESCRIPTION_3502);
        $this->assertEquals("Temporary phone error", StatusInterface::STATUS_DESCRIPTION_3503);
        $this->assertEquals("Temporary portability error", StatusInterface::STATUS_DESCRIPTION_3504);
        $this->assertEquals("Permanent operator error", StatusInterface::STATUS_DESCRIPTION_3521);
        $this->assertEquals("Permanent absence error", StatusInterface::STATUS_DESCRIPTION_3522);
        $this->assertEquals("Permanent phone error", StatusInterface::STATUS_DESCRIPTION_3523);
        $this->assertEquals("Permanent anti-spam error", StatusInterface::STATUS_DESCRIPTION_3524);
        $this->assertEquals("Permanent content error", StatusInterface::STATUS_DESCRIPTION_3525);
        $this->assertEquals("Permanent portability error", StatusInterface::STATUS_DESCRIPTION_3526);
        $this->assertEquals("Permanent roaming error", StatusInterface::STATUS_DESCRIPTION_3527);
        $this->assertEquals("Non-routable error", StatusInterface::STATUS_DESCRIPTION_3560);
        $this->assertEquals("Other error", StatusInterface::STATUS_DESCRIPTION_3599);
        $this->assertEquals("Invalid recipient", StatusInterface::STATUS_DESCRIPTION_3998);
        $this->assertEquals("Blacklisted recipient", StatusInterface::STATUS_DESCRIPTION_3999);
    }
}
