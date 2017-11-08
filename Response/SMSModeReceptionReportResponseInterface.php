<?php

/*
 * This file is part of the smsmode-library.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Response;

/**
 * sMsmode reception report response interface.
 *
 * cf. 3 Compte-rendu de réception
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 */
interface SMSModeReceptionReportResponseInterface {

	/**
	 * Code "Internal error".
	 */
	const CODE_INTERNAL_ERROR = 31;

	/**
	 * Code "Internal error sending SMS".
	 */
	const CODE_INTERNAL_ERROR_SENDING_SMS = 2;

	/**
	 * Code "Missing required parameter".
	 */
	const CODE_MISSING_REQUIRED_PARAMETER = 35;

	/**
	 * Code "No message".
	 */
	const CODE_NO_MESSAGE = 61;

	/**
	 * Code "Operator delivered".
	 */
	const CODE_OPERATOR_DELIVERED = 13;

	/**
	 * Code "Reception error".
	 */
	const CODE_RECEPTION_ERROR = 35;

	/**
	 * Code "Routing error".
	 */
	const CODE_ROUTING_ERROR = 34;

	/**
	 * Code "SMS received".
	 */
	const CODE_SMS_RECEIVED = 11;

	/**
	 * Code "SMS send".
	 */
	const CODE_SMS_SEND = 0;

	/**
	 * Description "Internal error".
	 */
	const DESC_INTERNAL_ERROR = "Erreur interne lors de la requête";

	/**
	 * Description "Internal error sending SMS".
	 */
	const DESC_INTERNAL_ERROR_SENDING_SMS = "Erreur interne lors de l'envoi du SMS";

	/**
	 * Description "Missing required parameter".
	 */
	const DESC_MISSING_REQUIRED_PARAMETER = "Paramètre obligatoire manquant";

	/**
	 * Description "No message".
	 */
	const DESC_NO_MESSAGE = "SMS n'existant pas ou plus";

	/**
	 * Code "Operator delivered".
	 */
	const DESC_OPERATOR_DELIVERED = "Délivré opérateur (SMS délivré à l'opérateur dont dépend votre destinataire)";

	/**
	 * Code "Reception error".
	 */
	const DESC_RECEPTION_ERROR = "Erreur réception (SMS non délivré par l'opérateur sur e téléphone du destinataire)";

	/**
	 * Code "Routing error".
	 */
	const DESC_ROUTING_ERROR = "Erreur routage (réseau du destinataire non reconnu)";

	/**
	 * Description "SMS send".
	 */
	const DESC_SMS_RECEIVED = "SMS reçu par le téléphone portable";

	/**
	 * Description "SMS send".
	 */
	const DESC_SMS_SEND = "SMS envoyé";

}
