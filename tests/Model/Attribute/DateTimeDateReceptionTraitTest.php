<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Attribute;

use DateTime;
use Exception;
use WBW\Library\SMSMode\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestDateTimeDateReceptionTrait;

/**
 * Date/time date reception trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class DateTimeDateReceptionTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateReception() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReception(): void {

        // Set a Date reception mock.
        $dateReception = new DateTime();

        $obj = new TestDateTimeDateReceptionTrait();

        $obj->setDateReception($dateReception);
        $this->assertSame($dateReception, $obj->getDateReception());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestDateTimeDateReceptionTrait();

        $this->assertNull($obj->getDateReception());
    }
}
