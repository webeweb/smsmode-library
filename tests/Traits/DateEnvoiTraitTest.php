<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Traits;

use DateTime;
use Exception;
use WBW\Library\SMSMode\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Tests\Fixtures\Traits\TestDateEnvoiTrait;

/**
 * Date envoi trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Traits
 */
class DateEnvoiTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestDateEnvoiTrait();

        $this->assertNull($obj->getDateEnvoi());
    }

    /**
     * Tests the setDateEnvoi() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEnvoi() {

        // Set a Date envoi mock.
        $dateEnvoi = new DateTime();

        $obj = new TestDateEnvoiTrait();

        $obj->setDateEnvoi($dateEnvoi);
        $this->assertSame($dateEnvoi, $obj->getDateEnvoi());
    }
}
