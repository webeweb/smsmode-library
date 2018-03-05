<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Character;

use WBW\Library\SMSMode\Exception\SMSModeCharacterNotAllowedException;

/**
 * sMsmode character.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Character
 * @final
 */
final class SMSModeCharacter {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Convert a map.
     *
     * @param array $map The map.
     * @return array Returns the converted map.
     */
    private function convert($map) {
        $output = [];
        foreach ($map as $value) {
            $output[utf8_decode($value)] = urlencode(utf8_decode($value));
        }
        return $output;
    }

    /**
     * Get all characters.
     *
     * @return array Returns all characters.
     */
    public static function getAllCharacters() {
        return [
            "\n", "\r", " ",
            "!", "\"", "#", "$", "%", "&", "'", "(", ")", "+", ",", "-", ".", "/", "{", "|", "}", "~", "[", "\\", "]", "^",
            "0", "1", "2", "3", "4", "5", "6", "7", "8", "9",
            ":", ";", "<", "=", ">", "?", "@",
            "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "_",
            "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z",
            "¡", "£", "€", "¥", "§", "¿",
            "Ä", "Å", "Æ", "Ç", "È", "É", "Ñ", "Ö", "Ø", "Ü", "ß", "à", "ä", "å", "æ", "è", "é", "ì", "ñ", "ò", "ö", "ø", "ù", "Ü",
        ];
    }

    /**
     * Get two characters.
     *
     * @return array Returns the two characters.
     */
    public static function getTwoCharacters() {
        return ["/", "{", "|", "}", "~", "[", "\\", "]", "^", "€"];
    }

    /**
     * Length.
     *
     * @param string $message The message.
     * @return integer Returns the length.
     * @throws SMSModeCharacterNotAllowedException Throws a sMsmode character not allowed exception if a character is prohibited.
     */
    public function length($message) {

        // Initialize the lenght.
        $length = 0;

        // Define the reference.
        $all = $this->convert(self::getAllCharacters());
        $two = $this->convert(self::getTwoCharacters());

        // Decode the message.
        $buffer = utf8_decode($message);

        // Handle each character.
        $count = strlen($buffer);
        for ($i = 0; $i < $count; ++$i) {

            // Get the character.
            $char = substr($buffer, $i, 1);

            // Check the character.
            if (false === array_key_exists($char, $all)) {
                throw new SMSModeCharacterNotAllowedException(utf8_encode($char));
            }
            if (true === array_key_exists($char, $two)) {
                $length++;
            }

            // Increment.
            $length++;
        }

        // Return the length.
        return $length;
    }

}
