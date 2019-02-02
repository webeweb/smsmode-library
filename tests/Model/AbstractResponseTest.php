<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use WBW\Library\SMSMode\Model\AbstractResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Tests\Fixtures\Model\TestResponse;

/**
 * Abstract response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class AbstractResponseTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals(0, AbstractResponse::RESPONSE_CODE_0);
        $this->assertEquals(1, AbstractResponse::RESPONSE_CODE_1);
        $this->assertEquals(2, AbstractResponse::RESPONSE_CODE_2);
        $this->assertEquals(10, AbstractResponse::RESPONSE_CODE_10);
        $this->assertEquals(11, AbstractResponse::RESPONSE_CODE_11);
        $this->assertEquals(12, AbstractResponse::RESPONSE_CODE_12);
        $this->assertEquals(13, AbstractResponse::RESPONSE_CODE_13);
        $this->assertEquals(14, AbstractResponse::RESPONSE_CODE_14);
        $this->assertEquals(15, AbstractResponse::RESPONSE_CODE_15);
        $this->assertEquals(16, AbstractResponse::RESPONSE_CODE_16);
        $this->assertEquals(21, AbstractResponse::RESPONSE_CODE_21);
        $this->assertEquals(22, AbstractResponse::RESPONSE_CODE_22);
        $this->assertEquals(33, AbstractResponse::RESPONSE_CODE_33);
        $this->assertEquals(34, AbstractResponse::RESPONSE_CODE_34);
        $this->assertEquals(35, AbstractResponse::RESPONSE_CODE_35);
        $this->assertEquals(36, AbstractResponse::RESPONSE_CODE_36);
        $this->assertEquals(37, AbstractResponse::RESPONSE_CODE_37);
        $this->assertEquals(38, AbstractResponse::RESPONSE_CODE_38);
        $this->assertEquals(50, AbstractResponse::RESPONSE_CODE_50);
        $this->assertEquals(40, AbstractResponse::RESPONSE_CODE_40);
        $this->assertEquals(100, AbstractResponse::RESPONSE_CODE_100);
        $this->assertEquals(101, AbstractResponse::RESPONSE_CODE_101);
        $this->assertEquals(999, AbstractResponse::RESPONSE_CODE_999);
        $this->assertEquals(3501, AbstractResponse::RESPONSE_CODE_3501);
        $this->assertEquals(3502, AbstractResponse::RESPONSE_CODE_3502);
        $this->assertEquals(3503, AbstractResponse::RESPONSE_CODE_3503);
        $this->assertEquals(3504, AbstractResponse::RESPONSE_CODE_3504);
        $this->assertEquals(3521, AbstractResponse::RESPONSE_CODE_3521);
        $this->assertEquals(3522, AbstractResponse::RESPONSE_CODE_3522);
        $this->assertEquals(3523, AbstractResponse::RESPONSE_CODE_3523);
        $this->assertEquals(3524, AbstractResponse::RESPONSE_CODE_3524);
        $this->assertEquals(3525, AbstractResponse::RESPONSE_CODE_3525);
        $this->assertEquals(3526, AbstractResponse::RESPONSE_CODE_3526);
        $this->assertEquals(3527, AbstractResponse::RESPONSE_CODE_3527);
        $this->assertEquals(3560, AbstractResponse::RESPONSE_CODE_3560);
        $this->assertEquals(3599, AbstractResponse::RESPONSE_CODE_3599);
        $this->assertEquals(3998, AbstractResponse::RESPONSE_CODE_3998);
        $this->assertEquals(3999, AbstractResponse::RESPONSE_CODE_3999);

        $this->assertEquals("Sent", AbstractResponse::RESPONSE_DESCRIPTION_0);
        $this->assertEquals("In progress", AbstractResponse::RESPONSE_DESCRIPTION_1);
        $this->assertEquals("Internal error", AbstractResponse::RESPONSE_DESCRIPTION_2);
        $this->assertEquals("Programmed", AbstractResponse::RESPONSE_DESCRIPTION_10);
        $this->assertEquals("Received", AbstractResponse::RESPONSE_DESCRIPTION_11);
        $this->assertEquals("Partially delivered", AbstractResponse::RESPONSE_DESCRIPTION_12);
        $this->assertEquals("Issued operator (temporary status)", AbstractResponse::RESPONSE_DESCRIPTION_13);
        $this->assertEquals("Issued", AbstractResponse::RESPONSE_DESCRIPTION_14);
        $this->assertEquals("Partially received", AbstractResponse::RESPONSE_DESCRIPTION_15);
        $this->assertEquals("Listened", AbstractResponse::RESPONSE_DESCRIPTION_16);
        $this->assertEquals("Not deliverable", AbstractResponse::RESPONSE_DESCRIPTION_21);
        $this->assertEquals("Rejected", AbstractResponse::RESPONSE_DESCRIPTION_22);
        $this->assertEquals("Not sent - insufficient credit", AbstractResponse::RESPONSE_DESCRIPTION_33);
        $this->assertEquals("Routing error", AbstractResponse::RESPONSE_DESCRIPTION_34);
        $this->assertEquals("Reception error", AbstractResponse::RESPONSE_DESCRIPTION_35);
        $this->assertEquals("Message error", AbstractResponse::RESPONSE_DESCRIPTION_36);
        $this->assertEquals("Expired message", AbstractResponse::RESPONSE_DESCRIPTION_37);
        $this->assertEquals("Message too long", AbstractResponse::RESPONSE_DESCRIPTION_38);
        $this->assertEquals("Not delivered", AbstractResponse::RESPONSE_DESCRIPTION_50);
        $this->assertEquals("Model", AbstractResponse::RESPONSE_DESCRIPTION_40);
        $this->assertEquals("Read", AbstractResponse::RESPONSE_DESCRIPTION_100);
        $this->assertEquals("Not read", AbstractResponse::RESPONSE_DESCRIPTION_101);
        $this->assertEquals("Undefined", AbstractResponse::RESPONSE_DESCRIPTION_999);
        $this->assertEquals("Temporary operator error", AbstractResponse::RESPONSE_DESCRIPTION_3501);
        $this->assertEquals("Temporary absence error", AbstractResponse::RESPONSE_DESCRIPTION_3502);
        $this->assertEquals("Temporary phone error", AbstractResponse::RESPONSE_DESCRIPTION_3503);
        $this->assertEquals("Temporary portability error", AbstractResponse::RESPONSE_DESCRIPTION_3504);
        $this->assertEquals("Permanent operator error", AbstractResponse::RESPONSE_DESCRIPTION_3521);
        $this->assertEquals("Permanent absence error", AbstractResponse::RESPONSE_DESCRIPTION_3522);
        $this->assertEquals("Permanent phone error", AbstractResponse::RESPONSE_DESCRIPTION_3523);
        $this->assertEquals("Permanent anti-spam error", AbstractResponse::RESPONSE_DESCRIPTION_3524);
        $this->assertEquals("Permanent content error", AbstractResponse::RESPONSE_DESCRIPTION_3525);
        $this->assertEquals("Permanent portability error", AbstractResponse::RESPONSE_DESCRIPTION_3526);
        $this->assertEquals("Permanent roaming error", AbstractResponse::RESPONSE_DESCRIPTION_3527);
        $this->assertEquals("Non-routable error", AbstractResponse::RESPONSE_DESCRIPTION_3560);
        $this->assertEquals("Other error", AbstractResponse::RESPONSE_DESCRIPTION_3599);
        $this->assertEquals("Invalid recipient", AbstractResponse::RESPONSE_DESCRIPTION_3998);
        $this->assertEquals("Blacklisted recipient", AbstractResponse::RESPONSE_DESCRIPTION_3999);

        $this->assertEquals("dmY", TestResponse::RESPONSE_DATE_FORMAT);
        $this->assertEquals("dmY-H:i", TestResponse::RESPONSE_DATETIME_FORMAT);
        $this->assertEquals("|", TestResponse::RESPONSE_DELIMITER);

        $obj = new TestResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
    }

    /**
     * Tests the enumResponses() method.
     *
     * @return void
     */
    public function testEnumResponses() {

        $res = AbstractResponse::enumResponses();
        $this->assertCount(38, $res);

        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_0, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_1, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_2, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_10, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_11, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_12, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_13, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_14, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_15, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_16, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_21, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_22, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_33, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_34, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_35, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_36, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_37, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_38, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_50, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_40, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_100, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_101, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_999, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3501, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3502, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3503, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3504, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3521, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3522, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3523, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3524, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3525, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3526, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3527, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3560, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3599, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3998, $res);
        $this->assertArrayHasKey(AbstractResponse::RESPONSE_CODE_3999, $res);

        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_0, $res[AbstractResponse::RESPONSE_CODE_0]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_1, $res[AbstractResponse::RESPONSE_CODE_1]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_2, $res[AbstractResponse::RESPONSE_CODE_2]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_10, $res[AbstractResponse::RESPONSE_CODE_10]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_11, $res[AbstractResponse::RESPONSE_CODE_11]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_12, $res[AbstractResponse::RESPONSE_CODE_12]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_13, $res[AbstractResponse::RESPONSE_CODE_13]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_14, $res[AbstractResponse::RESPONSE_CODE_14]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_15, $res[AbstractResponse::RESPONSE_CODE_15]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_16, $res[AbstractResponse::RESPONSE_CODE_16]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_21, $res[AbstractResponse::RESPONSE_CODE_21]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_22, $res[AbstractResponse::RESPONSE_CODE_22]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_33, $res[AbstractResponse::RESPONSE_CODE_33]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_34, $res[AbstractResponse::RESPONSE_CODE_34]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_35, $res[AbstractResponse::RESPONSE_CODE_35]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_36, $res[AbstractResponse::RESPONSE_CODE_36]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_37, $res[AbstractResponse::RESPONSE_CODE_37]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_38, $res[AbstractResponse::RESPONSE_CODE_38]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_50, $res[AbstractResponse::RESPONSE_CODE_50]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_40, $res[AbstractResponse::RESPONSE_CODE_40]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_100, $res[AbstractResponse::RESPONSE_CODE_100]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_101, $res[AbstractResponse::RESPONSE_CODE_101]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_999, $res[AbstractResponse::RESPONSE_CODE_999]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3501, $res[AbstractResponse::RESPONSE_CODE_3501]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3502, $res[AbstractResponse::RESPONSE_CODE_3502]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3503, $res[AbstractResponse::RESPONSE_CODE_3503]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3504, $res[AbstractResponse::RESPONSE_CODE_3504]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3521, $res[AbstractResponse::RESPONSE_CODE_3521]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3522, $res[AbstractResponse::RESPONSE_CODE_3522]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3523, $res[AbstractResponse::RESPONSE_CODE_3523]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3524, $res[AbstractResponse::RESPONSE_CODE_3524]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3525, $res[AbstractResponse::RESPONSE_CODE_3525]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3526, $res[AbstractResponse::RESPONSE_CODE_3526]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3527, $res[AbstractResponse::RESPONSE_CODE_3527]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3560, $res[AbstractResponse::RESPONSE_CODE_3560]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3599, $res[AbstractResponse::RESPONSE_CODE_3599]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3998, $res[AbstractResponse::RESPONSE_CODE_3998]);
        $this->assertEquals(AbstractResponse::RESPONSE_DESCRIPTION_3999, $res[AbstractResponse::RESPONSE_CODE_3999]);
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new TestResponse();

        $obj->setCode(0);
        $this->assertEquals(0, $obj->getCode());
    }

    /**
     * Tests the setDescription() method.
     *
     * @return void
     */
    public function testSetDescription() {

        $obj = new TestResponse();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }
}
