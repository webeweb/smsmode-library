<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Request;

use WBW\Library\SmsMode\Request\TransferringCreditsRequest;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Transferring credits request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Request
 */
class TransferringCreditsRequestTest extends AbstractTestCase {

    /**
     * Test setCreditAmount()
     *
     * @return void
     */
    public function testSetCreditAmount(): void {

        $obj = new TransferringCreditsRequest();

        $obj->setCreditAmount(0);
        $this->assertEquals(0, $obj->getCreditAmount());
    }

    /**
     * Test setTargetPseudo()
     *
     * @return void
     */
    public function testSetTargetPseudo(): void {

        $obj = new TransferringCreditsRequest();

        $obj->setTargetPseudo("targetPseudo");
        $this->assertEquals("targetPseudo", $obj->getTargetPseudo());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/creditTransfert.do", TransferringCreditsRequest::TRANSFERRING_CREDITS_RESOURCE_PATH);

        $obj = new TransferringCreditsRequest();

        $this->assertNull($obj->getCreditAmount());
        $this->assertNull($obj->getReference());
        $this->assertEquals(TransferringCreditsRequest::TRANSFERRING_CREDITS_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getTargetPseudo());
    }
}
