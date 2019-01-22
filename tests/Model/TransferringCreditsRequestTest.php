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

use WBW\Library\Core\Exception\Pointer\NullPointerException;
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
     * Test the toArray() method.
     *
     * @return void
     * @throws NullPointerException Throws a null pointer exception.
     */
    public function estToArray() {

        $obj = new TransferringCreditsRequest();

        $obj->setTargetPseudo("targetPseudo");
        $obj->setCreditAmount(212);

        $obj->setReference("reference");

        $res = [
            "targetPseudo" => "targetPseudo",
            "creditAmount" => 212,
            "reference"    => "reference",
        ];
        $this->assertEquals($res, $obj->toArray());
    }

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
}
