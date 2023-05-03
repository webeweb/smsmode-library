<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Serializer;

use InvalidArgumentException;
use Throwable;
use WBW\Library\SmsMode\Serializer\NumeroSerializer;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Numero serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Serializer
 */
class NumeroSerializerTest extends AbstractTestCase {

    /**
     * Test checkNumero()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCheckNumero(): void {

        $this->assertNull(NumeroSerializer::checkNumero("33600000000"));
    }

    /**
     * Test checkNumero()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCheckNumeroWithInvalidArgumentException(): void {

        try {

            NumeroSerializer::checkNumero("exception");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The numero "exception" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test deserializeNumero()
     *
     * @return void
     */
    public function testDeserializeNumero(): void {

        $this->assertEquals("0612345678", NumeroSerializer::deserializeNumero("33612345678"));
        $this->assertEquals("0712345678", NumeroSerializer::deserializeNumero("33712345678"));
        $this->assertEquals("0612345678", NumeroSerializer::deserializeNumero("0612345678"));
        $this->assertEquals("0712345678", NumeroSerializer::deserializeNumero("0712345678"));
    }

    /**
     * Test serializeNumero()
     *
     * @return void
     */
    public function testSerializeNumero(): void {

        $this->assertEquals("33612345678", NumeroSerializer::serializeNumero("0612345678"));
        $this->assertEquals("33712345678", NumeroSerializer::serializeNumero("0712345678"));
        $this->assertEquals("33612345678", NumeroSerializer::serializeNumero("33612345678"));
        $this->assertEquals("33712345678", NumeroSerializer::serializeNumero("33712345678"));
    }
}
