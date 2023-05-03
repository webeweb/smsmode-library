<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Request;

use WBW\Library\SmsMode\Request\DeletingSmsRequest;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Deleting SMS request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Request
 */
class DeletingSmsRequestTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/deleteSMS.do", DeletingSmsRequest::DELETING_SMS_RESOURCE_PATH);

        $obj = new DeletingSmsRequest();

        $this->assertNull($obj->getNumero());
        $this->assertEquals(DeletingSmsRequest::DELETING_SMS_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getSmsID());
    }
}
