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

use WBW\Library\SmsMode\Request\CreatingApiKeyRequest;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Creating API key request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Request
 */
class CreatingApiKeyRequestTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/2.0/createAuthorisation.do", CreatingApiKeyRequest::CREATING_API_KEY_RESOURCE_PATH);

        $obj = new CreatingApiKeyRequest();

        $this->assertEquals(CreatingApiKeyRequest::CREATING_API_KEY_RESOURCE_PATH, $obj->getResourcePath());
    }
}
