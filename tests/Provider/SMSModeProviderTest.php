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

use WBW\Library\SMSMode\Authentication\SMSModeAuthentication;
use WBW\Library\SMSMode\Provider\SMSModeProvider;
use WBW\Library\SMSMode\Request\SMSModeDeleteSubaccountRequest;
use WBW\Library\SMSMode\Response\SMSModeDeleteSubaccountResponse;
use WBW\Library\SMSMode\Tests\AbstractFrameworkTestCase;

/**
 * sMsmode provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Provider
 * @final
 */
final class SMSModeProviderTest extends AbstractFrameworkTestCase {

    /**
     * Request.
     *
     * @var SMSModeDeleteSubaccountRequest
     */
    private $request;

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

        // Set a sMsmode delete subaccount request mock.
        $this->request = new SMSModeDeleteSubaccountRequest();
        $this->request->setUsername("username");
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SMSModeProvider($this->authentication, $this->request);

        $this->assertSame($this->authentication, $obj->getAuthentication());
        $this->assertSame($this->request, $obj->getRequest());
        $this->assertFalse($obj->getDebug());
    }

    /**
     * Tests the callAPI() method.
     *
     * @return void
     */
    public function testCallAPI() {

        $obj = new SMSModeProvider($this->authentication, $this->request);

        $res = $obj->callAPI();
        $this->assertInstanceOf(SMSModeDeleteSubaccountResponse::class, $res);
        $this->assertEquals(SMSModeDeleteSubaccountResponse::RESPONSE_CODE_AUTHENTICATION_ERROR, $res->getCode());
        $this->assertContains("Votre authentification a échoué", $res->getDescription());
    }

    /**
     * Tests the setDebug() method.
     *
     * @return void
     */
    public function testSetDebug() {

        $obj = new SMSModeProvider($this->authentication, $this->request);

        $obj->setDebug(true);
        $this->assertTrue($obj->getDebug());
    }

}
