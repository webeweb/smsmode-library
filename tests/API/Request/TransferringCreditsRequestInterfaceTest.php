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

use WBW\Library\SMSMode\API\Request\TransferringCreditsRequestInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Transferring credits request interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\API\Request
 */
class TransferringCreditsRequestInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("/1.6/creditTransfert.do", TransferringCreditsRequestInterface::TRANSFERRING_CREDITS_RESOURCE_PATH);
    }
}
