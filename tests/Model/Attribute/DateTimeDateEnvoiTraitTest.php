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
use WBW\Library\SMSMode\Tests\Fixtures\Model\Attribute\TestDateTimeDateEnvoiTrait;

/**
 * Date/time date envoi trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Attribute
 */
class DateTimeDateEnvoiTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateEnvoi() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEnvoi() {

        // Set a Date envoi mock.
        $dateEnvoi = new DateTime();

        $obj = new TestDateTimeDateEnvoiTrait();

        $obj->setDateEnvoi($dateEnvoi);
        $this->assertSame($dateEnvoi, $obj->getDateEnvoi());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestDateTimeDateEnvoiTrait();

        $this->assertNull($obj->getDateEnvoi());
    }
}
