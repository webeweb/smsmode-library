<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\SmsMode\Tests\Provider;

use Psr\Log\LoggerInterface;
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\AbstractProvider;
use WBW\Library\SmsMode\Tests\AbstractTestCase;
use WBW\Library\SmsMode\Tests\Fixtures\Provider\TestProvider;

/**
 * Abstract provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Provider
 */
class AbstractProviderTest extends AbstractTestCase {

    /**
     * Authentication.
     *
     * @var Authentication|null
     */
    private $authentication;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set an Authentication mock.
        $this->authentication = new Authentication();
        $this->authentication->setPseudo("pseudo");
        $this->authentication->setPass("pass");
    }

    /**
     * Test setVerify()
     *
     * @return void
     */
    public function testSetVerifyCA(): void {

        $obj = new TestProvider($this->authentication);

        $obj->setVerify(true);
        $this->assertTrue($obj->getVerify());

        $obj->setVerify(false);
        $this->assertFalse($obj->getVerify());

        $obj->setVerify("verify");
        $this->assertEquals("verify", $obj->getVerify());

        $obj->setVerify(null);
        $this->assertTrue($obj->getVerify());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        $this->assertEquals("https://api.smsmode.com", AbstractProvider::ENDPOINT_PATH);

        $obj = new TestProvider($this->authentication, $logger);

        $this->assertSame($logger, $obj->getLogger());

        $this->assertSame($this->authentication, $obj->getAuthentication());
        $this->assertNotNull($obj->getRequestSerializer());
    }
}
