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
 * sMsmode credit transfer response interface.
 *
 * cf. 6 Transfert de crédit de compte à compte
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 * @final
 */
final class SMSModeCreditTransferResponse extends AbstractSMSModeResponse implements SMSModeCreditTransferResponseInterface {

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
