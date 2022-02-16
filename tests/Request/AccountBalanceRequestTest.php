<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

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
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/credit.do", AccountBalanceRequest::ACCOUNT_BALANCE_RESOURCE_PATH);

        $obj = new AccountBalanceRequest();

        $this->assertEquals(AccountBalanceRequest::ACCOUNT_BALANCE_RESOURCE_PATH, $obj->getResourcePath());
    }
}
