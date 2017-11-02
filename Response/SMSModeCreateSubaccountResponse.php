<?php

/*
 * Disclaimer: This source code is protected by copyright law and by
 * international conventions.
 *
 * Any reproduction or partial or total distribution of the source code, by any
 * means whatsoever, is strictly forbidden.
 *
 * Anyone not complying with these provisions will be guilty of the offense of
 * infringement and the penal sanctions provided for by law.
 *
 * © 2017 S.A.R.L. Nectar de Code. All rights reserved.
 */

namespace WBW\Library\SMSMode\Response;

/**
 * SMSMode create subaccount response.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 * @final
 */
final class SMSModeCreateSubaccountResponse extends AbstractSMSModeResponse implements SMSModeCreateSubaccountResponseInterface {

	/**
	 * {@inheritdoc}
	 */
	protected function parse($rawResponse) {

		// Explode the response.
		$parts = explode("|", $rawResponse);

		// Set the code and description.
		$this->setCode((int) trim($parts[0]));
		$this->setDescription(trim($parts[1]));
	}

}
