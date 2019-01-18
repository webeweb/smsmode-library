<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Helper;

use WBW\Library\SMSMode\API\StatusInterface;
use WBW\Library\SMSMode\Helper\StatusHelper;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Status helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Helper
 */
class StatusHelperTest extends AbstractTestCase {

    /**
     * Tests the getStatuses() method.
     *
     * @return void
     */
    public function testGetStatuses() {

        $res = StatusHelper::getStatuses();
        $this->assertCount(38, $res);

        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_0, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_1, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_2, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_10, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_11, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_12, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_13, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_14, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_15, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_16, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_21, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_22, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_33, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_34, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_35, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_36, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_37, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_38, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_50, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_40, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_100, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_101, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_999, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3501, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3502, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3503, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3504, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3521, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3522, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3523, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3524, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3525, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3526, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3527, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3560, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3599, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3998, $res);
        $this->assertArrayHasKey(StatusInterface::STATUS_CODE_3999, $res);

        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_0, $res[StatusInterface::STATUS_CODE_0]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_1, $res[StatusInterface::STATUS_CODE_1]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_2, $res[StatusInterface::STATUS_CODE_2]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_10, $res[StatusInterface::STATUS_CODE_10]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_11, $res[StatusInterface::STATUS_CODE_11]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_12, $res[StatusInterface::STATUS_CODE_12]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_13, $res[StatusInterface::STATUS_CODE_13]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_14, $res[StatusInterface::STATUS_CODE_14]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_15, $res[StatusInterface::STATUS_CODE_15]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_16, $res[StatusInterface::STATUS_CODE_16]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_21, $res[StatusInterface::STATUS_CODE_21]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_22, $res[StatusInterface::STATUS_CODE_22]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_33, $res[StatusInterface::STATUS_CODE_33]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_34, $res[StatusInterface::STATUS_CODE_34]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_35, $res[StatusInterface::STATUS_CODE_35]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_36, $res[StatusInterface::STATUS_CODE_36]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_37, $res[StatusInterface::STATUS_CODE_37]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_38, $res[StatusInterface::STATUS_CODE_38]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_50, $res[StatusInterface::STATUS_CODE_50]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_40, $res[StatusInterface::STATUS_CODE_40]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_100, $res[StatusInterface::STATUS_CODE_100]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_101, $res[StatusInterface::STATUS_CODE_101]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_999, $res[StatusInterface::STATUS_CODE_999]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3501, $res[StatusInterface::STATUS_CODE_3501]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3502, $res[StatusInterface::STATUS_CODE_3502]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3503, $res[StatusInterface::STATUS_CODE_3503]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3504, $res[StatusInterface::STATUS_CODE_3504]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3521, $res[StatusInterface::STATUS_CODE_3521]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3522, $res[StatusInterface::STATUS_CODE_3522]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3523, $res[StatusInterface::STATUS_CODE_3523]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3524, $res[StatusInterface::STATUS_CODE_3524]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3525, $res[StatusInterface::STATUS_CODE_3525]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3526, $res[StatusInterface::STATUS_CODE_3526]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3527, $res[StatusInterface::STATUS_CODE_3527]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3560, $res[StatusInterface::STATUS_CODE_3560]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3599, $res[StatusInterface::STATUS_CODE_3599]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3998, $res[StatusInterface::STATUS_CODE_3998]);
        $this->assertEquals(StatusInterface::STATUS_DESCRIPTION_3999, $res[StatusInterface::STATUS_CODE_3999]);
    }
}
