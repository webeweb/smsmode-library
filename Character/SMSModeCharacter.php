<?php

/*
 * This file is part of the WBWSMSModeLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Character;

use WBW\Library\SMSMode\Exception\SMSModeCharacterNotAllowedException;

/**
 * sMsmode character.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Character
 * @final
 */
final class SMSModeCharacter implements SMSModeCharacterInterface {

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
	 * Decode a message.
	 *
	 * @param string $message The message.
	 * @return string Returns an decoded message.
	 */
	public function decode($message) {

	}

	/**
	 * Encode a message.
	 *
	 * @param string $message The message.
	 * @return string Returns an encoded message.
	 * @throws SMSModeCharacterNotAllowedException Throws a sMsmode character not allowed exception if a character is prohibited.
	 */
	public function encode($message) {

		// Initialize the ouput.
		$output = "";

		// Define the reference.
		$all = $this->convert(self::ALL_CHARACTERS);

		// Decode the message.
		$buffer = utf8_decode($message);

		// Handle each character.
		for ($i = 0; $i < strlen($buffer); ++$i) {

			// Get the character.
			$char = substr($buffer, $i, 1);

			// Check the character.
			if (!array_key_exists($char, $all)) {
				throw new SMSModeCharacterNotAllowedException(utf8_encode($char));
			}

			// Encode.
			$output .= $all[$char];
		}

		// Return the ouput.
		return $output;
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
		$all = $this->convert(self::ALL_CHARACTERS);
		$two = $this->convert(self::TWO_CHARACTERS);

		// Decode the message.
		$buffer = utf8_decode($message);

		// Handle each character.
		for ($i = 0; $i < strlen($buffer); ++$i) {

			// Get the character.
			$char = substr($buffer, $i, 1);

			// Check the character.
			if (!array_key_exists($char, $all)) {
				throw new SMSModeCharacterNotAllowedException(utf8_encode($char));
			}

			// Increment.
			$length++;
			if (in_array($char, array_keys($two))) {
				$length++;
			}
		}

		// Return the length.
		return $length;
	}

}
