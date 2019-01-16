<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\API\Request;

use WBW\Library\SMSMode\API\Request\CreatingSubAccountRequestInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Creating sub-account request interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\API\Request
 */
class CreatingSubAccountRequestInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("/1.6/createSubAccount.do", CreatingSubAccountRequestInterface::CREATING_SUB_ACCOUNT_RESOURCE_PATH);
    }
}
