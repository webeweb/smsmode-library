<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use WBW\Library\SMSMode\Model\Authentication;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Authentication test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class AuthenticationTest extends AbstractTestCase {

    /**
     * Tests the setPass() method.
     *
     * @return void
     */
    public function testSetPass(): void {

        $obj = new Authentication();

        $obj->setPass("pass");
        $this->assertEquals("pass", $obj->getPass());
    }

    /**
     * Tests the setPseudo() method.
     *
     * @return void
     */
    public function testSetPseudo(): void {

        $obj = new Authentication();

        $obj->setPseudo("pseudo");
        $this->assertEquals("pseudo", $obj->getPseudo());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Authentication();

        $this->assertNull($obj->getPass());
        $this->assertNull($obj->getPseudo());
        $this->assertNull($obj->getAccessToken());
    }
}
