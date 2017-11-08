<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\Response\SMSModeReceptionReportResponse;

/**
 * sMsmode reception report request.
 *
 * cf. 3 Compte-rendu de réception
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 * @final
 */
final class SMSModeReceptionReportRequest implements SMSModeRequestInterface {

	/**
	 * SMS id.
	 *
	 * @var string
	 */
	private $smsID;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING DTO DO.
	}

	/**
	 * {@inheritdoc}
	 */
	public function getResourcePath() {
		return "compteRendu.do";
	}

	/**
	 * Get the SMS id.
	 *
	 * @return string Returns the SMS id.
	 */
	public function getSmsID() {
		return $this->smsID;
	}

	/**
	 * {@inheritdoc}
	 */
	public function parseResponse($rawResponse) {
		return new SMSModeReceptionReportResponse($rawResponse);
	}

	/**
	 * Set the SMS id.
	 *
	 * @param string $smsID The SMS id.
	 * @return SMSModeReceptionReportRequest Returns the sMsmode reception report request.
	 */
	public function setSmsID($smsID) {
		$this->smsID = $smsID;
		return $this;
	}

	/**
	 *  {@inhertidoc}
	 */
	public function toArray() {

		// Initialize the output.
		$output = [];

		// Check the required sms id.
		if (is_null($this->smsID)) {
			throw new NullPointerException("The parameter \"smsID\" is missing");
		}
		$output["smsID"] = $this->smsID;

		// Return the output.
		return $output;
	}

}
