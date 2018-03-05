<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Character
 * @final
 */
final class SMSModeCharacterTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $res1 = ["\n", "\r", " ", "!", "\"", "#", "$", "%", "&", "'", "(", ")", "+", ",", "-", ".", "/", "{", "|", "}", "~", "[", "\\", "]", "^", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", ":", ";", "<", "=", ">", "?", "@", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "_", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "¡", "£", "€", "¥", "§", "¿", "Ä", "Å", "Æ", "Ç", "È", "É", "Ñ", "Ö", "Ø", "Ü", "ß", "à", "ä", "å", "æ", "è", "é", "ì", "ñ", "ò", "ö", "ø", "ù", "Ü"];
        $this->assertEquals($res1, SMSModeCharacter::getAllCharacters());

        $res2 = ["/", "{", "|", "}", "~", "[", "\\", "]", "^", "€"];
        $this->assertEquals($res2, SMSModeCharacter::getTwoCharacters());
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
            $this->assertInstanceOf(SMSModeCharacterNotAllowedException::class, $ex);
            $this->assertEquals("The character \"«\" is not allowed", $ex->getMessage());
        }

        $this->assertEquals(0, $obj->length(""));
        $this->assertEquals(1, $obj->length("a"));
        $this->assertEquals(2, $obj->length("/"));
        $this->assertEquals(2, $obj->length("{"));
        $this->assertEquals(2, $obj->length("|"));
        $this->assertEquals(2, $obj->length("}"));
        $this->assertEquals(2, $obj->length("~"));
        $this->assertEquals(2, $obj->length("["));
        $this->assertEquals(2, $obj->length("\\"));
        $this->assertEquals(2, $obj->length("]"));
        $this->assertEquals(2, $obj->length("^"));
        $this->assertEquals(2, $obj->length("€"));
        $this->assertEquals(5, $obj->length("€uro"));
        $this->assertEquals(7, $obj->length("Welcome"));
        $this->assertEquals(13, $obj->length("Hello world !"));
    }

}
