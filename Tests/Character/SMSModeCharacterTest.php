<?php

/*
 * This file is part of the WBWSMSModeLibrary package.
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
	 * Tests the decode() method.
	 *
	 * @return void
	 */
	public function testDecode() {

		$obj = new SMSModeCharacter();
	}

	/**
	 * Tests the encode() method.
	 *
	 * @return void
	 */
	public function testEncode() {

		$obj = new SMSModeCharacter();

		try {
			$obj->encode("«");
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeCharacterNotAllowedException::class, $ex, "The method encode() does not throw the expected exception");
			$this->assertEquals("The character \"«\" is not allowed", $ex->getMessage(), "The methode getMessage() does not return the expected string");
		}

		$this->assertEquals("%0A", $obj->encode("\n"), "The method encode() does not return the expected string with \"NEW LINE\"");
		$this->assertEquals("%0D", $obj->encode("\r"), "The method encode() does not return the expected string with \"CARRIAGE RETURN\"");
		$this->assertEquals("+", $obj->encode(" "), "The method encode() does not return the expected string with \" \"");
		$this->assertEquals("%21", $obj->encode("!"), "The method encode() does not return the expected string with \"!\"");
		$this->assertEquals("%22", $obj->encode("\""), "The method encode() does not return the expected string with \"\"\"");
		$this->assertEquals("%23", $obj->encode("#"), "The method encode() does not return the expected string with \"#\"");
		$this->assertEquals("%24", $obj->encode("$"), "The method encode() does not return the expected string with \"$\"");
		$this->assertEquals("%25", $obj->encode("%"), "The method encode() does not return the expected string with \"%\"");
		$this->assertEquals("%26", $obj->encode("&"), "The method encode() does not return the expected string with \"&\"");
		$this->assertEquals("%27", $obj->encode("'"), "The method encode() does not return the expected string with \"'\"");
		$this->assertEquals("%28", $obj->encode("("), "The method encode() does not return the expected string with \"(\"");
		$this->assertEquals("%29", $obj->encode(")"), "The method encode() does not return the expected string with \")\"");
		$this->assertEquals("%2B", $obj->encode("+"), "The method encode() does not return the expected string with \"+\"");
		$this->assertEquals("%2C", $obj->encode(","), "The method encode() does not return the expected string with \",\"");
		$this->assertEquals("%2F", $obj->encode("/"), "The method encode() does not return the expected string with \"/\"");
		$this->assertEquals("%7B", $obj->encode("{"), "The method encode() does not return the expected string with \"{\"");
		$this->assertEquals("%7C", $obj->encode("|"), "The method encode() does not return the expected string with \"|\"");
		$this->assertEquals("%7D", $obj->encode("}"), "The method encode() does not return the expected string with \"}\"");
		$this->assertEquals("%7E", $obj->encode("~"), "The method encode() does not return the expected string with \"~\"");
		$this->assertEquals("%5B", $obj->encode("["), "The method encode() does not return the expected string with \"[\"");
		$this->assertEquals("%5C", $obj->encode("\\"), "The method encode() does not return the expected string with \"\\\"");
		$this->assertEquals("%5D", $obj->encode("]"), "The method encode() does not return the expected string with \"]\"");
		$this->assertEquals("%5E", $obj->encode("^"), "The method encode() does not return the expected string with \"^\"");
		$this->assertEquals("%3A", $obj->encode(":"), "The method encode() does not return the expected string with \":\"");
		$this->assertEquals("%3B", $obj->encode(";"), "The method encode() does not return the expected string with \";\"");
		$this->assertEquals("%3C", $obj->encode("<"), "The method encode() does not return the expected string with \"<\"");
		$this->assertEquals("%3D", $obj->encode("="), "The method encode() does not return the expected string with \"=\"");
		$this->assertEquals("%3E", $obj->encode(">"), "The method encode() does not return the expected string with \">\"");
		$this->assertEquals("%3F", $obj->encode("?"), "The method encode() does not return the expected string with \"?\"");
		$this->assertEquals("%40", $obj->encode("@"), "The method encode() does not return the expected string with \"@\"");
		$this->assertEquals("%A1", $obj->encode("¡"), "The method encode() does not return the expected string with \"¡\"");
		$this->assertEquals("%A3", $obj->encode("£"), "The method encode() does not return the expected string with \"£\"");
		$this->assertEquals("%3F", $obj->encode("€"), "The method encode() does not return the expected string with \"€\"");
		$this->assertEquals("%A5", $obj->encode("¥"), "The method encode() does not return the expected string with \"¥\"");
		$this->assertEquals("%A7", $obj->encode("§"), "The method encode() does not return the expected string with \"§\"");
		$this->assertEquals("%BF", $obj->encode("¿"), "The method encode() does not return the expected string with \"¿\"");
		$this->assertEquals("%C4", $obj->encode("Ä"), "The method encode() does not return the expected string with \"Ä\"");
		$this->assertEquals("%C5", $obj->encode("Å"), "The method encode() does not return the expected string with \"Å\"");
		$this->assertEquals("%C6", $obj->encode("Æ"), "The method encode() does not return the expected string with \"Æ\"");
		$this->assertEquals("%C7", $obj->encode("Ç"), "The method encode() does not return the expected string with \"Ç\"");
		$this->assertEquals("%C8", $obj->encode("È"), "The method encode() does not return the expected string with \"È\"");
		$this->assertEquals("%C9", $obj->encode("É"), "The method encode() does not return the expected string with \"É\"");
		$this->assertEquals("%D1", $obj->encode("Ñ"), "The method encode() does not return the expected string with \"Ñ\"");
		$this->assertEquals("%D6", $obj->encode("Ö"), "The method encode() does not return the expected string with \"Ö\"");
		$this->assertEquals("%D8", $obj->encode("Ø"), "The method encode() does not return the expected string with \"Ø\"");
		$this->assertEquals("%DC", $obj->encode("Ü"), "The method encode() does not return the expected string with \"Ü\"");
		$this->assertEquals("%DF", $obj->encode("ß"), "The method encode() does not return the expected string with \"ß\"");
		$this->assertEquals("%E0", $obj->encode("à"), "The method encode() does not return the expected string with \"à\"");
		$this->assertEquals("%E4", $obj->encode("ä"), "The method encode() does not return the expected string with \"ä\"");
		$this->assertEquals("%E5", $obj->encode("å"), "The method encode() does not return the expected string with \"å\"");
		$this->assertEquals("%E6", $obj->encode("æ"), "The method encode() does not return the expected string with \"æ\"");
		$this->assertEquals("%E8", $obj->encode("è"), "The method encode() does not return the expected string with \"è\"");
		$this->assertEquals("%E9", $obj->encode("é"), "The method encode() does not return the expected string with \"é\"");
		$this->assertEquals("%EC", $obj->encode("ì"), "The method encode() does not return the expected string with \"ì\"");
		$this->assertEquals("%F1", $obj->encode("ñ"), "The method encode() does not return the expected string with \"ñ\"");
		$this->assertEquals("%F2", $obj->encode("ò"), "The method encode() does not return the expected string with \"ò\"");
		$this->assertEquals("%F6", $obj->encode("ö"), "The method encode() does not return the expected string with \"ö\"");
		$this->assertEquals("%F8", $obj->encode("ø"), "The method encode() does not return the expected string with \"ø\"");
		$this->assertEquals("%F9", $obj->encode("ù"), "The method encode() does not return the expected string with \"ù\"");
		$this->assertEquals("%DC", $obj->encode("Ü"), "The method encode() does not return the expected string with \"Ü\"");
	}

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
		$this->assertEquals(13, $obj->length('Hello world !'), "The method length() does not return the expected length with \"Hello world !\"");
	}

}
