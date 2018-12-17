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
use WBW\Library\SMSMode\Request\SMSModeCreditTransferRequest;
use WBW\Library\SMSMode\Response\SMSModeCreditTransferResponse;
use WBW\Library\SMSMode\Tests\AbstractFrameworkTestCase;

/**
 * sMsmode credit transfer request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class SMSModeCreditTransferRequestTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SMSModeCreditTransferRequest();

        $this->assertEquals("creditTransfert.do", $obj->getResourcePath());

        $this->assertNull($obj->getCredit());
        $this->assertNull($obj->getReference());
        $this->assertNull($obj->getUsername());
    }

    /**
     * Tests the parseResponse() method.
     *
     * @return void
     */
    public function testParseResponse() {

        $obj = new SMSModeCreditTransferRequest();

        $res = $obj->parseResponse("exception");
        $this->assertInstanceOf(SMSModeCreditTransferResponse::class, $res);
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new SMSModeCreditTransferRequest();

        // ===
        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"username\" is missing", $ex->getMessage());
        }


        // ===
        try {

            $obj->setUsername("username");
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"credit\" is missing", $ex->getMessage());
        }

        // ===
        $obj->setCredit(212);
        $res1 = ["targetPseudo" => "username", "creditAmount" => 212];
        $this->assertEquals($res1, $obj->toArray());

        // ===
        $obj->setReference("reference");
        $res2 = ["targetPseudo" => "username", "creditAmount" => 212, "reference" => "reference"];
        $this->assertEquals($res2, $obj->toArray());
    }

}
