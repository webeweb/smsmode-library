<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Utility;

use WBW\Library\SMSMode\Tests\Cases\AbstractSMSModeFrameworkTestCase;
use WBW\Library\SMSMode\Utility\NumberUtility;

/**
 * Number utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Utility
 * @final
 */
final class NumberUtilityTest extends AbstractSMSModeFrameworkTestCase {

    /**
     * Tests the decodeNumber() method.
     *
     * @return void
     */
    public function testDecodeNumber() {

        $this->assertEquals("0612345678", NumberUtility::decodeNumber("33612345678"));
        $this->assertEquals("0712345678", NumberUtility::decodeNumber("33712345678"));
        $this->assertEquals("0612345678", NumberUtility::decodeNumber("0612345678"));
        $this->assertEquals("0712345678", NumberUtility::decodeNumber("0712345678"));
    }

    /**
     * Tests the encodeNumber() method.
     *
     * @return void
     */
    public function testEncodeNumber() {

        $this->assertEquals("33612345678", NumberUtility::encodeNumber("0612345678"));
        $this->assertEquals("33712345678", NumberUtility::encodeNumber("0712345678"));
        $this->assertEquals("33612345678", NumberUtility::encodeNumber("33612345678"));
        $this->assertEquals("33712345678", NumberUtility::encodeNumber("33712345678"));
    }

}
