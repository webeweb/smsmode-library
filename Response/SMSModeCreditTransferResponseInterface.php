<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 */
interface SMSModeCreditTransferResponseInterface {

    /**
     * Code "Authentication error".
     *
     * @var integer
     */
    const CODE_AUTHENTICATION_ERROR = 32;

    /**
     * Code "ID already exists".
     *
     * @var integer
     */
    const CODE_ID_ALREADY_EXISTS = 41;

    /**
     * Code "Insuficient credit".
     *
     * @var integer
     */
    const CODE_INSUFICIENT_CREDIT = 33;

    /**
     * Code "Internal error".
     *
     * @var integer
     */
    const CODE_INTERNAL_ERROR = 31;

    /**
     * Code "Missing required parameter".
     *
     * @var integer
     */
    const CODE_MISSING_REQUIRED_PARAMETER = 35;

    /**
     * Code "Transfer carried out".
     *
     * @var integer
     */
    const CODE_TRANSFER_CARRIED_OUT = 0;

    /**
     * Description "Authentication error".
     *
     * @var string
     */
    const DESC_AUTHENTICATION_ERROR = "Erreur d'authentification";

    /**
     * Description "ID already exists".
     *
     * @var string
     */
    const DESC_ID_ALREADY_EXISTS = "Identifiant inexistant";

    /**
     * Description "Insuficient credit".
     *
     * @var string
     */
    const DESC_INSUFICIENT_CREDIT = "Crédits insuffisants";

    /**
     * Description "Internal error".
     *
     * @var string
     */
    const DESC_INTERNAL_ERROR = "Erreur interne";

    /**
     * Description "Missing required parameter".
     *
     * @var string
     */
    const DESC_MISSING_REQUIRED_PARAMETER = "Paramètres incorrects";

    /**
     * Description "Transfer carried out".
     *
     * @var string
     */
    const DESC_TRANSFER_CARRIED_OUT = "Transfert effectué";

}
