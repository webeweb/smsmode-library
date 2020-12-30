<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model\Request;

use WBW\Library\SMSMode\Model\Request\DeletingSMSRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Deleting SMS request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model\Request
 */
class DeletingSMSRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/deleteSMS.do", DeletingSMSRequest::DELETING_SMS_RESOURCE_PATH);

        $obj = new DeletingSMSRequest();

        $this->assertNull($obj->getNumero());
        $this->assertEquals(DeletingSMSRequest::DELETING_SMS_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getSmsID());
    }
}
