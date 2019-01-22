<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use WBW\Library\SMSMode\Model\TransferringCreditsResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Transferring credits response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class TransferringCreditsResponseTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TransferringCreditsResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
    }
}
