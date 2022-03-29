<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Provider;

use Psr\Log\LoggerInterface;
use WBW\Library\SMSMode\Model\Authentication;
use WBW\Library\SMSMode\Provider\AbstractProvider;
use WBW\Library\SMSMode\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Tests\Fixtures\Provider\TestProvider;

/**
 * Abstract provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Tests\Provider
 */
class AbstractProviderTest extends AbstractTestCase {

    /**
     * Authentication.
     *
     * @var Authentication
     */
    private $authentication;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set an Authentication mock.
        $this->authentication = new Authentication();
        $this->authentication->setPseudo("pseudo");
        $this->authentication->setPass("pass");
    }

    /**
     * Tests __construct()
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
