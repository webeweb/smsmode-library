<?php

/*
 * This file is part of the WBWSMSModeLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Response;

/**
 * Abstract sMsmode response.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 * @abstract
 */
abstract class AbstractSMSModeResponse implements SMSModeResponseInterface {

	/**
	 * Code.
	 *
	 * @var integer
	 */
	private $code;

	/**
	 * Description.
	 *
	 * @var string
	 */
	private $description;

	/**
	 * Constructor.
	 *
	 * @param string $rawResponse The raw response.
	 */
	public final function __construct($rawResponse) {
		$this->parse($rawResponse);
	}

	/**
	 * Get the code.
	 *
	 * @return integer Returns the code.
	 */
	public final function getCode() {
		return $this->code;
	}

	/**
	 * Description.
	 *
	 * @return string Returns the description.
	 */
	public final function getDescription() {
		return $this->description;
	}

	/**
	 * Parse the response.
	 *
	 * @param string $rawResponse The raw response.
	 */
	protected function parse($rawResponse) {

		// Explode the response.
		$response = explode(self::RESPONSE_DELIMITER, $rawResponse);
		if (count($response) < 2) {
			return;
		}

		// Set the code and description.
		$this->setCode(intval(trim($response[0])));
		$this->setDescription(trim($response[1]));
	}

	/**
	 * Set the code.
	 *
	 * @param integer $code Returns the code.
	 * @return AbstractSMSModeResponse Returns the sMsmode response.
	 */
	protected final function setCode($code) {
		$this->code = $code;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return AbstractSMSModeResponse Returns the sMsmode response.
	 */
	protected final function setDescription($description) {
		$this->description = $description;
		return $this;
	}

}
