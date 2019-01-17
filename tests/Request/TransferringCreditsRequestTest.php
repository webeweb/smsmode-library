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

use Exception;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\TransferringCreditsRequestInterface;
use WBW\Library\SMSMode\Request\TransferringCreditsRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Transferring credits request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class TransferringCreditsRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TransferringCreditsRequest();

        $this->assertEquals(TransferringCreditsRequestInterface::TRANSFERRING_CREDITS_RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getCreditAmount());
        $this->assertNull($obj->getReference());
        $this->assertNull($obj->getTargetPseudo());
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     * @throws NullPointerException Throws a null pointer exception.
     */
    public function testToArray() {

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
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithoutArguments() {

        $obj = new TransferringCreditsRequest();

        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"targetPseudo\" is missing", $ex->getMessage());
        }

        try {

            $obj->setTargetPseudo("targetPseudo");
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"creditAmount\" is missing", $ex->getMessage());
        }
    }

}
