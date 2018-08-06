<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Helper;

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Helper\NumberHelper;

/**
 * Number helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Helper
 * @final
 */
final class NumberHelperTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the decodeNumber() method.
     *
     * @return void
     */
    public function testDecodeNumber() {

        $this->assertEquals("0612345678", NumberHelper::decodeNumber("33612345678"));
        $this->assertEquals("0712345678", NumberHelper::decodeNumber("33712345678"));
        $this->assertEquals("0612345678", NumberHelper::decodeNumber("0612345678"));
        $this->assertEquals("0712345678", NumberHelper::decodeNumber("0712345678"));
    }

    /**
     * Tests the encodeNumber() method.
     *
     * @return void
     */
    public function testEncodeNumber() {

        $this->assertEquals("33612345678", NumberHelper::encodeNumber("0612345678"));
        $this->assertEquals("33712345678", NumberHelper::encodeNumber("0712345678"));
        $this->assertEquals("33612345678", NumberHelper::encodeNumber("33612345678"));
        $this->assertEquals("33712345678", NumberHelper::encodeNumber("33712345678"));
    }

}
