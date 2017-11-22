<?php

/**
 * This file is part of the smsmode-library package.
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
 */
interface SMSModeCreditTransferResponseInterface {

	/**
	 * Code "Authentication error".
	 */
	const CODE_AUTHENTICATION_ERROR = 32;

	/**
	 * Code "ID already exists".
	 */
	const CODE_ID_ALREADY_EXISTS = 41;

	/**
	 * Code "Insuficient credit".
	 */
	const CODE_INSUFICIENT_CREDIT = 33;

	/**
	 * Code "Internal error".
	 */
	const CODE_INTERNAL_ERROR = 31;

	/**
	 * Code "Missing required parameter".
	 */
	const CODE_MISSING_REQUIRED_PARAMETER = 35;

	/**
	 * Code "Transfer carried out".
	 */
	const CODE_TRANSFER_CARRIED_OUT = 0;

	/**
	 * Description "Authentication error".
	 */
	const DESC_AUTHENTICATION_ERROR = "Erreur d'authentification";

	/**
	 * Description "ID already exists".
	 */
	const DESC_ID_ALREADY_EXISTS = "Identifiant inexistant";

	/**
	 * Description "Insuficient credit".
	 */
	const DESC_INSUFICIENT_CREDIT = "Crédits insuffisants";

	/**
	 * Description "Internal error".
	 */
	const DESC_INTERNAL_ERROR = "Erreur interne";

	/**
	 * Description "Missing required parameter".
	 */
	const DESC_MISSING_REQUIRED_PARAMETER = "Paramètres incorrects";

	/**
	 * Description "Transfer carried out".
	 */
	const DESC_TRANSFER_CARRIED_OUT = "Transfert effectué";

}
