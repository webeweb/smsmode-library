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

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Character\SMSModeCharacterInterface;

/**
 * SMSMode character interface test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Character
 * @final
 */
final class SMSModeCharacterInterfaceTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$res1 = ["\n", "\r", " ", "!", "\"", "#", "$", "%", "&", "'", "(", ")", "+", ",", "-", ".", "/", "{", "|", "}", "~", "[", "\\", "]", "^", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", ":", ";", "<", "=", ">", "?", "@", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "_", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "¡", "£", "€", "¥", "§", "¿", "Ä", "Å", "Æ", "Ç", "È", "É", "Ñ", "Ö", "Ø", "Ü", "ß", "à", "ä", "å", "æ", "è", "é", "ì", "ñ", "ò", "ö", "ø", "ù", "Ü"];
		$this->assertEquals($res1, SMSModeCharacterInterface::ONE_CHARACTER);

		$res2 = ["/", "{", "|", "}", "~", "[", "\\", "]", "^", "€"];
		$this->assertEquals($res2, SMSModeCharacterInterface::TWO_CHARACTER);
	}

}
