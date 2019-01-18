<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use WBW\Library\SMSMode\API\Request\AccountBalanceRequestInterface;
use WBW\Library\SMSMode\Request\AccountBalanceRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Account balance request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class AccountBalanceRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AccountBalanceRequest();

        $this->assertEquals(AccountBalanceRequestInterface::ACCOUNT_BALANCE_RESOURCE_PATH, $obj->getResourcePath());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     * @throws NullPointerException Throws a null pointer exception.
     */
    public function testToArray() {

        $obj = new AccountBalanceRequest();

        $res = [];
        $this->assertEquals($res, $obj->toArray());
    }
}
