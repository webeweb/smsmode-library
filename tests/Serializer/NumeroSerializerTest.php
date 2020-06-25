<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Serializer;

use Exception;
use InvalidArgumentException;
use WBW\Library\SMSMode\Serializer\NumeroSerializer;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Numero serializer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Serializer
 */
class NumeroSerializerTest extends AbstractTestCase {

    /**
     * Tests the checkNumero() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCheckNumero() {

        $this->assertNull(NumeroSerializer::checkNumero("33600000000"));
    }

    /**
     * Tests the checkNumero() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCheckNumeroWithInvalidArgumentException() {

        try {

            NumeroSerializer::checkNumero("exception");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The numero "exception" is invalid', $ex->getMessage());
        }
    }

    /**
     * Tests the deserializeNumero() method.
     *
     * @return void
     */
    public function testDeserializeNumero() {

        $this->assertEquals("0612345678", NumeroSerializer::deserializeNumero("33612345678"));
        $this->assertEquals("0712345678", NumeroSerializer::deserializeNumero("33712345678"));
        $this->assertEquals("0612345678", NumeroSerializer::deserializeNumero("0612345678"));
        $this->assertEquals("0712345678", NumeroSerializer::deserializeNumero("0712345678"));
    }

    /**
     * Tests the serializeNumero() method.
     *
     * @return void
     */
    public function testSerializeNumero() {

        $this->assertEquals("33612345678", NumeroSerializer::serializeNumero("0612345678"));
        $this->assertEquals("33712345678", NumeroSerializer::serializeNumero("0712345678"));
        $this->assertEquals("33612345678", NumeroSerializer::serializeNumero("33612345678"));
        $this->assertEquals("33712345678", NumeroSerializer::serializeNumero("33712345678"));
    }
}
