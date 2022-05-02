<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Model\Attribute;

use DateTime;
use Exception;
use WBW\Library\SmsMode\Tests\AbstractTestCase;
use WBW\Library\SmsMode\Tests\Fixtures\Model\Attribute\TestDateTimeDateReceptionTrait;

/**
 * Date/time date reception trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Model\Attribute
 */
class DateTimeDateReceptionTraitTest extends AbstractTestCase {

    /**
     * Tests setDateReception()
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
}
