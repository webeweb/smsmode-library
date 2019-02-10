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

use WBW\Library\SMSMode\Model\Request\AccountBalanceRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Account balance request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model\Request
 */
class AccountBalanceRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("/http/1.6/credit.do", AccountBalanceRequest::ACCOUNT_BALANCE_RESOURCE_PATH);

        $obj = new AccountBalanceRequest();

        $this->assertEquals(AccountBalanceRequest::ACCOUNT_BALANCE_RESOURCE_PATH, $obj->getResourcePath());
    }
}
