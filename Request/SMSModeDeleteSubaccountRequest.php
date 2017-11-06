<?php

/*
 * This file is part of the WBWSMSModeLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use WBW\Library\SMSMode\Exception\SMSModeMissingSettingException;
use WBW\Library\SMSMode\Response\SMSModeDeleteSubaccountResponse;

/**
 * sMsmode delete subaccount request.
 *
 * cf. 5 Création de sous-compte
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 * @final
 */
final class SMSModeDeleteSubaccountRequest implements SMSModeRequestInterface {

	/**
	 * Username.
	 *
	 * @var string
	 */
	private $username;

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
		return 'deleteSubAccount.do';
	}

	/**
	 * Get the username.
	 *
	 * @return string Returns the username.
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * {@inheritdoc}
	 */
	public function parseResponse($rawResponse) {
		return new SMSModeDeleteSubaccountResponse($rawResponse);
	}

	/**
	 * Set the username.
	 *
	 * @param string $username The username.
	 * @return SMSModeDeleteSubaccountRequest Returns the sMsmode delete subaccount request.
	 */
	public function setUsername($username) {
		$this->username = $username;
		return $this;
	}

	/**
	 *  {@inhertidoc}
	 */
	public function toArray() {

		// Initialize the output.
		$output = [];

		// Check the required setting username.
		if (is_null($this->username)) {
			throw new SMSModeMissingSettingException('username');
		}
		$output['pseudoToDelete'] = $this->username;

		// Return the output.
		return $output;
	}

}
