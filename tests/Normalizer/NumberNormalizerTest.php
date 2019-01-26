<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Normalizer;

use WBW\Library\SMSMode\Normalizer\NumeroNormalizer;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Numero normalizer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Normalizer
 */
class NumeroNormalizerTest extends AbstractTestCase {

    /**
     * Tests the denormalizeNumero() method.
     *
     * @return void
     */
    public function testDenormalizeNumero() {

        $this->assertEquals("0612345678", NumeroNormalizer::denormalizeNumero("33612345678"));
        $this->assertEquals("0712345678", NumeroNormalizer::denormalizeNumero("33712345678"));
        $this->assertEquals("0612345678", NumeroNormalizer::denormalizeNumero("0612345678"));
        $this->assertEquals("0712345678", NumeroNormalizer::denormalizeNumero("0712345678"));
    }

    /**
     * Tests the normalizeNumero() method.
     *
     * @return void
     */
    public function testNormalizeNumero() {

        $this->assertEquals("33612345678", NumeroNormalizer::normalizeNumero("0612345678"));
        $this->assertEquals("33712345678", NumeroNormalizer::normalizeNumero("0712345678"));
        $this->assertEquals("33612345678", NumeroNormalizer::normalizeNumero("33612345678"));
        $this->assertEquals("33712345678", NumeroNormalizer::normalizeNumero("33712345678"));
    }
}
