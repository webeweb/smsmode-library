<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use Exception;
use UnexpectedValueException;
use WBW\Library\SMSMode\Model\AbstractRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Abstract request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class AbstractRequestTest extends AbstractTestCase {

    /**
     * Tests the checkNumero() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCheckNumero() {

        $this->assertNull(AbstractRequest::checkNumero("33600000000"));
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCheckNumeroWithUnexpectedValueException() {

        try {

            AbstractRequest::checkNumero("exception");
        } catch (Exception $ex) {

            $this->assertInstanceOf(UnexpectedValueException::class, $ex);
            $this->assertEquals("The numero \"exception\" is invalid", $ex->getMessage());
        }
    }
}
