<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Character;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Character\SMSModeCharacter;
use WBW\Library\SMSMode\Exception\SMSModeCharacterNotAllowedException;

/**
 * SMSMode character test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Character
 * @final
 */
final class SMSModeCharacterTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the length() method.
	 *
	 * @return void
	 */
	public function testLength() {

		$obj = new SMSModeCharacter();

		try {
			$obj->length("«");
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeCharacterNotAllowedException::class, $ex, "The method length() does not throw the expected exception");
			$this->assertEquals("The character \"«\" is not allowed", $ex->getMessage(), "The methode getMessage() does not return the expected string");
		}

		$this->assertEquals(0, $obj->length(""), "The method length() does not return the expected length");
		$this->assertEquals(1, $obj->length("a"), "The method length() does not return the expected length with \"a\"");
		$this->assertEquals(2, $obj->length("/"), "The method length() does not return the expected length with \"/\"");
		$this->assertEquals(2, $obj->length("{"), "The method length() does not return the expected length with \"{\"");
		$this->assertEquals(2, $obj->length("|"), "The method length() does not return the expected length with \"|\"");
		$this->assertEquals(2, $obj->length("}"), "The method length() does not return the expected length with \"}\"");
		$this->assertEquals(2, $obj->length("~"), "The method length() does not return the expected length with \"~\"");
		$this->assertEquals(2, $obj->length("["), "The method length() does not return the expected length with \"[\"");
		$this->assertEquals(2, $obj->length("\\"), "The method length() does not return the expected length with \"\\\"");
		$this->assertEquals(2, $obj->length("]"), "The method length() does not return the expected length with \"]\"");
		$this->assertEquals(2, $obj->length("^"), "The method length() does not return the expected length with \"^\"");
		$this->assertEquals(2, $obj->length("€"), "The method length() does not return the expected length with \"€\"");
		$this->assertEquals(5, $obj->length("€uro"), "The method length() does not return the expected length with \"€uro\"");
		$this->assertEquals(7, $obj->length("Welcome"), "The method length() does not return the expected length with \"Welcome\"");
		$this->assertEquals(13, $obj->length("Hello world !"), "The method length() does not return the expected length with \"Hello world !\"");
	}

}
