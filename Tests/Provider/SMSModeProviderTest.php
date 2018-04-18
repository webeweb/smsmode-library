<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Provider;

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Authentication\SMSModeAuthentication;
use WBW\Library\SMSMode\Provider\SMSModeProvider;
use WBW\Library\SMSMode\Request\SMSModeAccountBalanceRequest;
use WBW\Library\SMSMode\Response\SMSModeAccountBalanceResponse;

/**
 * sMsmode provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Provider
 * @final
 */
final class SMSModeProviderTest extends PHPUnit_Framework_TestCase {

    /**
     * Account balance.
     *
     * @var SMSModeAaccountBalanceRequest
     */
    private $accountBalance;

    /**
     * Authentication.
     *
     * @var SMSModeAuthentication
     */
    private $authentication;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a sMsmode authentication mock.
        $this->authentication = new SMSModeAuthentication();
        $this->authentication->setUsername("username");
        $this->authentication->setPassword("password");

        // Set a sMsmode account balance request mock.
        $this->accountBalance = new SMSModeAccountBalanceRequest();
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new SMSModeProvider($this->authentication, $this->accountBalance);

        $this->assertEquals($this->authentication, $obj->getAuthentication());
        $this->assertEquals($this->accountBalance, $obj->getRequest());
        $this->assertFalse($obj->getDebug());
    }

    /**
     * Tests the callAPI() method.
     *
     * @return void
     */
    public function testCallAPI() {

        $obj = new SMSModeProvider($this->authentication, $this->accountBalance);

        $this->assertInstanceOf(SMSModeAccountBalanceResponse::class, $obj->callAPI());
    }

}
