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
 * sMsmode get responses response interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 */
interface SMSModeGetResponsesResponseInterface {

	/**
	 * Code "Authentication error".
	 *
	 * @var integer
	 */
	const CODE_AUTHENTICATION_ERROR = 32;

	/**
	 * Code "Missing required parameter".
	 *
	 * @var integer
	 */
	const CODE_MISSING_REQUIRED_PARAMETER = 35;

	/**
	 * Description "Authentication error".
	 *
	 * @var string
	 */
	const DESC_AUTHENTICATION_ERROR = "Erreur d'authentification";

	/**
	 * Description "Missing required parameter".
	 *
	 * @var string
	 */
	const DESC_MISSING_REQUIRED_PARAMETER = "Paramètre(s) incorrect(s) (pseudo et pass obligatoire)";

}
