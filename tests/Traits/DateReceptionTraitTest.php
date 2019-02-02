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
use WBW\Library\SMSMode\Tests\Fixtures\Traits\TestDateReceptionTrait;

/**
 * Date reception trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Traits
 */
class DateReceptionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestDateReceptionTrait();

        $this->assertNull($obj->getDateReception());
    }

    /**
     * Tests the setDateReception() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReception() {

        // Set a Date reception mock.
        $dateReception = new DateTime();

        $obj = new TestDateReceptionTrait();

        $obj->setDateReception($dateReception);
        $this->assertSame($dateReception, $obj->getDateReception());
    }
}
