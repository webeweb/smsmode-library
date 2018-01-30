<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Provider;

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Authentication\SMSModeAuthentication;
use WBW\Library\SMSMode\Provider\SMSModeProvider;
use WBW\Library\SMSMode\Request\SMSModeAccountBalanceRequest;

/**
 * sMsmode provider test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
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
     * Provider.
     *
     * @var SMSModeProvider
     */
    private $provider;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        //
        parent::setUp();

        // Set the provider.
        $this->authentication = new SMSModeAuthentication();
        $this->accountBalance = new SMSModeAccountBalanceRequest();
        $this->provider       = new SMSModeProvider($this->authentication, $this->accountBalance);
        $this->provider->getAuthentication()
            ->setUsername("username")
            ->setPassword("password");
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = $this->provider;

        $this->assertEquals($this->authentication, $obj->getAuthentication());
        $this->assertEquals($this->accountBalance, $obj->getRequest());
        $this->assertEquals(false, $obj->getDebug());
    }

}
