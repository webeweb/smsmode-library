<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Model;

use WBW\Library\SmsMode\Model\SmsReplyCallback;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * SMS reply callback test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Model
 */
class SmsReplyCallbackTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SmsReplyCallback();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getDateReception());
        $this->assertNull($obj->getEmetteur());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getRefClient());
        $this->assertNull($obj->getResponseID());
        $this->assertNull($obj->getSmsID());
    }
}
