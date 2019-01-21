<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Response;

use WBW\Library\SMSMode\Response\AuthenticationResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Authentication response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 */
class AuthenticationResponseTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AuthenticationResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getAccessToken());
        $this->assertNull($obj->getAccount());
        $this->assertNull($obj->getCreationDate());
        $this->assertNull($obj->getExpiration());
        $this->assertNull($obj->getState());
    }
}
