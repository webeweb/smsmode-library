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
abstract class AbstractSMSModeResponse {

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
	 * @param string $response The response.
	 */
	public final function __construct($response) {
		$this->parse($response);
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
	abstract protected function parse($rawResponse);

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
