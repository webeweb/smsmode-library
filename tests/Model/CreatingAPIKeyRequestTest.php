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

        $this->assertEquals("/http/2.0/createAuthorisation.do", CreatingAPIKeyRequest::CREATING_API_KEY_RESOURCE_PATH);

        $obj = new CreatingAPIKeyRequest();

        $this->assertEquals(CreatingAPIKeyRequest::CREATING_API_KEY_RESOURCE_PATH, $obj->getResourcePath());
    }

}
