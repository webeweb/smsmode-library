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

use WBW\Library\SMSMode\Model\CreatingAPIKeyRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Creating API key request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class CreatingAPIKeyRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CreatingAPIKeyRequest();

        $this->assertNull($obj->getAccessToken());
    }

    /**
     * Tests the setAccessToken() method.
     *
     * @return void
     */
    public function testSetAccessToken() {

        $obj = new CreatingAPIKeyRequest();

        $obj->setAccessToken("accessToken");
        $this->assertEquals("accessToken", $obj->getAccessToken());
    }
}
