<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Traits\DateTimes;

use DateTime;
use Throwable;
use WBW\Library\SmsMode\Tests\AbstractTestCase;
use WBW\Library\SmsMode\Tests\Fixtures\Traits\DateTimes\TestDateTimeDateEnvoiTrait;

/**
 * Date/time date envoi trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Model\Attribute
 */
class DateTimeDateEnvoiTraitTest extends AbstractTestCase {

    /**
     * Test setDateEnvoi()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEnvoi(): void {

        // Set a Date envoi mock.
        $dateEnvoi = new DateTime();

        $obj = new TestDateTimeDateEnvoiTrait();

        $obj->setDateEnvoi($dateEnvoi);
        $this->assertSame($dateEnvoi, $obj->getDateEnvoi());
    }
}
