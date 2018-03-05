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
 * sMsmode create subaccount response interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 */
interface SMSModeCreateSubaccountResponseInterface {

    /**
     * Code "Authentication error".
     *
     * @var integer
     */
    const CODE_AUTHENTICATION_ERROR = 32;

    /**
     * Code "Created".
     *
     * @var integer
     */
    const CODE_CREATED = 0;

    /**
     * Code "ID already exists".
     *
     * @var integer
     */
    const CODE_ID_ALREADY_EXISTS = 41;

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
     * Description "Authentication error".
     *
     * @var string
     */
    const DESC_AUTHENTICATION_ERROR = "Erreur d'authentification";

    /**
     * Description "Created".
     *
     * @var string
     */
    const DESC_CREATED = "Création effectuée";

    /**
     * Description "ID already exists".
     *
     * @var string
     */
    const DESC_ID_ALREADY_EXISTS = "Identifiant déjà existant";

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

}
