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
use WBW\Library\SMSMode\API\Request\DeletingSubAccountRequestInterface;
use WBW\Library\SMSMode\Request\DeletingSubAccountRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * sMsmode delete subaccount request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class DeletingSubAccountRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DeletingSubAccountRequest();

        $this->assertEquals(DeletingSubAccountRequestInterface::DELETING_SUB_ACCOUNT_RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getPseudoToDelete());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     * @throws NullPointerException Throws a null pointer exception.
     */
    public function testToArray() {

        $obj = new DeletingSubAccountRequest();

        $obj->setPseudoToDelete("pseudoToDelete");

        $res = [
            "pseudoToDelete" => "pseudoToDelete",
        ];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithoutArguments() {

        $obj = new DeletingSubAccountRequest();

        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"pseudoToDelete\" is missing", $ex->getMessage());
        }
    }
}
