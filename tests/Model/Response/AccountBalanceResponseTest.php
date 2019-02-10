<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model\Response;

use WBW\Library\SMSMode\Model\Response\AccountBalanceResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Account balance response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model\Response
 */
class AccountBalanceResponseTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AccountBalanceResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getAccountBalance());
    }

    /**
     * Tests the setAccountBalance() method.
     *
     * @return void
     */
    public function testSetAccountBalance() {

        $obj = new AccountBalanceResponse();

        $obj->setAccountBalance(212.5);
        $this->assertEquals(212.5, $obj->getAccountBalance());
    }
}
