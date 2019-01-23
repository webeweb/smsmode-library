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

use WBW\Library\SMSMode\Model\TransferringCreditsRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Transferring credits request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class TransferringCreditsRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TransferringCreditsRequest();

        $this->assertNull($obj->getCreditAmount());
        $this->assertNull($obj->getReference());
        $this->assertNull($obj->getTargetPseudo());
    }

    /**
     * Tests the setCreditAmount() method.
     *
     * @return void
     */
    public function testSetCreditAmount() {

        $obj = new TransferringCreditsRequest();

        $obj->setCreditAmount(0);
        $this->assertEquals(0, $obj->getCreditAmount());
    }

    /**
     * Tests the setReference() method.
     *
     * @return void
     */
    public function testSetReference() {

        $obj = new TransferringCreditsRequest();

        $obj->setReference("reference");
        $this->assertEquals("reference", $obj->getReference());
    }

    /**
     * Tests the setTargetPseudo() method.
     *
     * @return void
     */
    public function testSetTargetPseudo() {

        $obj = new TransferringCreditsRequest();

        $obj->setTargetPseudo("targetPseudo");
        $this->assertEquals("targetPseudo", $obj->getTargetPseudo());
    }
}
