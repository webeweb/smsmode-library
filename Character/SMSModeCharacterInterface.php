<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Character;

/**
 * sMsmode character interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Character
 */
interface SMSModeCharacterInterface {

	/**
	 * All characters.
	 */
	const ALL_CHARACTERS = [
		"\n",
		"\r",
		" ",
		"!",
		"\"",
		"#",
		"$",
		"%",
		"&",
		"'",
		"(",
		")",
		"+",
		",",
		"-",
		".",
		"/",
		"{",
		"|",
		"}",
		"~",
		"[",
		"\\",
		"]",
		"^",
		"0",
		"1",
		"2",
		"3",
		"4",
		"5",
		"6",
		"7",
		"8",
		"9",
		":",
		";",
		"<",
		"=",
		">",
		"?",
		"@",
		"A",
		"B",
		"C",
		"D",
		"E",
		"F",
		"G",
		"H",
		"I",
		"J",
		"K",
		"L",
		"M",
		"N",
		"O",
		"P",
		"Q",
		"R",
		"S",
		"T",
		"U",
		"V",
		"W",
		"X",
		"Y",
		"Z",
		"_",
		"a",
		"b",
		"c",
		"d",
		"e",
		"f",
		"g",
		"h",
		"i",
		"j",
		"k",
		"l",
		"m",
		"n",
		"o",
		"p",
		"q",
		"r",
		"s",
		"t",
		"u",
		"v",
		"w",
		"x",
		"y",
		"z",
		"¡",
		"£",
		"€",
		"¥",
		"§",
		"¿",
		"Ä",
		"Å",
		"Æ",
		"Ç",
		"È",
		"É",
		"Ñ",
		"Ö",
		"Ø",
		"Ü",
		"ß",
		"à",
		"ä",
		"å",
		"æ",
		"è",
		"é",
		"ì",
		"ñ",
		"ò",
		"ö",
		"ø",
		"ù",
		"Ü",
	];

	/**
	 * Two characters.
	 */
	const TWO_CHARACTERS = [
		"/",
		"{",
		"|",
		"}",
		"~",
		"[",
		"\\",
		"]",
		"^",
		"€",
	];

}
