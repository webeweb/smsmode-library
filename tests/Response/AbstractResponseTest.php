<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Response;

use WBW\Library\SmsMode\Api\ResponseInterface;
use WBW\Library\SmsMode\Response\AbstractResponse;
use WBW\Library\SmsMode\Tests\AbstractTestCase;
use WBW\Library\SmsMode\Tests\Fixtures\Response\TestResponse;

/**
 * Abstract response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Response
 */
class AbstractResponseTest extends AbstractTestCase {

    /**
     * Test enumResponses()
     *
     * @return void
     */
    public function testEnumResponses(): void {

        $res = AbstractResponse::enumResponses();
        $this->assertCount(38, $res);

        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_0, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_1, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_2, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_10, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_11, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_12, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_13, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_14, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_15, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_16, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_21, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_22, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_33, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_34, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_35, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_36, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_37, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_38, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_50, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_40, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_100, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_101, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_999, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3501, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3502, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3503, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3504, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3521, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3522, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3523, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3524, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3525, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3526, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3527, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3560, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3599, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3998, $res);
        $this->assertArrayHasKey(ResponseInterface::RESPONSE_CODE_3999, $res);

        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_0, $res[ResponseInterface::RESPONSE_CODE_0]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_1, $res[ResponseInterface::RESPONSE_CODE_1]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_2, $res[ResponseInterface::RESPONSE_CODE_2]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_10, $res[ResponseInterface::RESPONSE_CODE_10]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_11, $res[ResponseInterface::RESPONSE_CODE_11]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_12, $res[ResponseInterface::RESPONSE_CODE_12]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_13, $res[ResponseInterface::RESPONSE_CODE_13]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_14, $res[ResponseInterface::RESPONSE_CODE_14]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_15, $res[ResponseInterface::RESPONSE_CODE_15]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_16, $res[ResponseInterface::RESPONSE_CODE_16]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_21, $res[ResponseInterface::RESPONSE_CODE_21]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_22, $res[ResponseInterface::RESPONSE_CODE_22]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_33, $res[ResponseInterface::RESPONSE_CODE_33]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_34, $res[ResponseInterface::RESPONSE_CODE_34]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_35, $res[ResponseInterface::RESPONSE_CODE_35]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_36, $res[ResponseInterface::RESPONSE_CODE_36]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_37, $res[ResponseInterface::RESPONSE_CODE_37]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_38, $res[ResponseInterface::RESPONSE_CODE_38]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_50, $res[ResponseInterface::RESPONSE_CODE_50]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_40, $res[ResponseInterface::RESPONSE_CODE_40]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_100, $res[ResponseInterface::RESPONSE_CODE_100]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_101, $res[ResponseInterface::RESPONSE_CODE_101]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_999, $res[ResponseInterface::RESPONSE_CODE_999]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3501, $res[ResponseInterface::RESPONSE_CODE_3501]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3502, $res[ResponseInterface::RESPONSE_CODE_3502]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3503, $res[ResponseInterface::RESPONSE_CODE_3503]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3504, $res[ResponseInterface::RESPONSE_CODE_3504]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3521, $res[ResponseInterface::RESPONSE_CODE_3521]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3522, $res[ResponseInterface::RESPONSE_CODE_3522]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3523, $res[ResponseInterface::RESPONSE_CODE_3523]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3524, $res[ResponseInterface::RESPONSE_CODE_3524]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3525, $res[ResponseInterface::RESPONSE_CODE_3525]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3526, $res[ResponseInterface::RESPONSE_CODE_3526]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3527, $res[ResponseInterface::RESPONSE_CODE_3527]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3560, $res[ResponseInterface::RESPONSE_CODE_3560]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3599, $res[ResponseInterface::RESPONSE_CODE_3599]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3998, $res[ResponseInterface::RESPONSE_CODE_3998]);
        $this->assertEquals(ResponseInterface::RESPONSE_DESCRIPTION_3999, $res[ResponseInterface::RESPONSE_CODE_3999]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertnull($obj->getRawResponse());
    }
}
