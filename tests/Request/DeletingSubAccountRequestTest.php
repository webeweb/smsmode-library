<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use WBW\Library\SMSMode\Request\DeletingSubAccountRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * sMsmode delete subaccount request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class DeletingSubAccountRequestTest extends AbstractTestCase {

    /**
     * Tests setPseudoToDelete()
     *
     * @return void
     */
    public function testSetPseudoToDelete(): void {

        $obj = new DeletingSubAccountRequest();

        $obj->setPseudoToDelete("pseudoToDelete");
        $this->assertEquals("pseudoToDelete", $obj->getPseudoToDelete());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/deleteSubAccount.do", DeletingSubAccountRequest::DELETING_SUB_ACCOUNT_RESOURCE_PATH);

        $obj = new DeletingSubAccountRequest();

        $this->assertNull($obj->getPseudoToDelete());
        $this->assertEquals(DeletingSubAccountRequest::DELETING_SUB_ACCOUNT_RESOURCE_PATH, $obj->getResourcePath());
    }
}
