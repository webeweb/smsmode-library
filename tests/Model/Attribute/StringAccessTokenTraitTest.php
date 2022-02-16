<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Attribute;

use WBW\Library\SMSMode\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestStringAccessTokenTrait;

/**
 * String access token trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class StringAccessTokenTraitTest extends AbstractTestCase {

    /**
     * Tests setAccessToken()
     *
     * @return void
     */
    public function testSetAccessToken(): void {

        $obj = new TestStringAccessTokenTrait();

        $obj->setAccessToken("accessToken");
        $this->assertEquals("accessToken", $obj->getAccessToken());
    }
}
