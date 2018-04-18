<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API;

/**
 * sMsmode response interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API
 */
interface SMSModeResponseInterface {

    /**
     * Response Code "Accepted".
     *
     * @var integer
     */
    const RESPONSE_CODE_ACCEPTED = 0;

    /**
     * Response Code "Authentication error".
     *
     * @var integer
     */
    const RESPONSE_CODE_AUTHENTICATION_ERROR = 32;

    /**
     * Response Code "Created".
     *
     * @var integer
     */
    const RESPONSE_CODE_CREATED = 0;

    /**
     * Response Code "ID already exists".
     *
     * @var integer
     */
    const RESPONSE_CODE_ID_ALREADY_EXISTS = 41;

    /**
     * Response Code "Insuficient credit".
     *
     * @var integer
     */
    const RESPONSE_CODE_INSUFICIENT_CREDIT = 33;

    /**
     * Response Code "Internal error".
     *
     * @var integer
     */
    const RESPONSE_CODE_INTERNAL_ERROR = 31;

    /**
     * Response Code "Internal error sending SMS".
     *
     * @var integer
     */
    const RESPONSE_CODE_INTERNAL_ERROR_SENDING_SMS = 2;

    /**
     * Response Code "Missing required parameter".
     *
     * @var integer
     */
    const RESPONSE_CODE_MISSING_REQUIRED_PARAMETER = 35;

    /**
     * Response Code "No message".
     *
     * @var integer
     */
    const RESPONSE_CODE_NO_MESSAGE = 61;

    /**
     * Response Code "Operator delivered".
     *
     * @var integer
     */
    const RESPONSE_CODE_OPERATOR_DELIVERED = 13;

    /**
     * Response Code "Reception error".
     *
     * @var integer
     */
    const RESPONSE_CODE_RECEPTION_ERROR = 35;

    /**
     * Response Code "Routing error".
     *
     * @var integer
     */
    const RESPONSE_CODE_ROUTING_ERROR = 34;

    /**
     * Response Code "SMS received".
     *
     * @var integer
     */
    const RESPONSE_CODE_SMS_RECEIVED = 11;

    /**
     * Response Code "SMS send".
     *
     * @var integer
     */
    const RESPONSE_CODE_SMS_SEND = 0;

    /**
     * Response Code "Temporaly unavailable".
     *
     * @var integer
     */
    const RESPONSE_CODE_TEMPORALY_UNAVAILABLE = 50;

    /**
     * Response Code "Transfer carried out".
     *
     * @var integer
     */
    const RESPONSE_CODE_TRANSFER_CARRIED_OUT = 0;

    /**
     * Response delimiter.
     *
     * @var string
     */
    const RESPONSE_DELIMITER = "|";

    /**
     * Response description "Accepted".
     *
     * @var string
     */
    const RESPONSE_DESC_ACCEPTED = "Accepté - le message a été accepté par le système et est en cours de traitement";

    /**
     * Response description "Authentication error".
     *
     * @var string
     */
    const RESPONSE_DESC_AUTHENTICATION_ERROR = "Erreur d'authentification";

    /**
     * Response description "Created".
     *
     * @var string
     */
    const RESPONSE_DESC_CREATED = "Création effectuée";

    /**
     * Response description "ID already exists".
     *
     * @var string
     */
    const RESPONSE_DESC_ID_ALREADY_EXISTS = "Identifiant déjà existant";

    /**
     * Response description "Insuficient credit".
     *
     * @var string
     */
    const RESPONSE_DESC_INSUFICIENT_CREDIT = "Crédits insuffisants";

    /**
     * Response description "Internal error".
     *
     * @var string
     */
    const RESPONSE_DESC_INTERNAL_ERROR = "Erreur interne";

    /**
     * Response description "Internal error sending SMS".
     *
     * @var string
     */
    const RESPONSE_DESC_INTERNAL_ERROR_SENDING_SMS = "Erreur interne lors de l'envoi du SMS";

    /**
     * Response description "Missing required parameter".
     *
     * @var string
     */
    const RESPONSE_DESC_MISSING_REQUIRED_PARAMETER = "Paramètre obligatoire manquant";

    /**
     * Response description "No message".
     *
     * @var string
     */
    const RESPONSE_DESC_NO_MESSAGE = "SMS n'existant pas ou plus";

    /**
     * Response description "Operator delivered".
     *
     * @var string
     */
    const RESPONSE_DESC_OPERATOR_DELIVERED = "Délivré opérateur (SMS délivré à l'opérateur dont dépend votre destinataire)";

    /**
     * Response description "Reception error".
     *
     * @var string
     */
    const RESPONSE_DESC_RECEPTION_ERROR = "Erreur réception (SMS non délivré par l'opérateur sur e téléphone du destinataire)";

    /**
     * Response description "Routing error".
     *
     * @var string
     */
    const RESPONSE_DESC_ROUTING_ERROR = "Erreur routage (réseau du destinataire non reconnu)";

    /**
     * Response description "SMS send".
     *
     * @var string
     */
    const RESPONSE_DESC_SMS_RECEIVED = "SMS reçu par le téléphone portable";

    /**
     * Response description "SMS send".
     *
     * @var string
     */
    const RESPONSE_DESC_SMS_SEND = "SMS envoyé";

    /**
     * Response description "Temporaly unavailable".
     *
     * @var string
     */
    const RESPONSE_DESC_TEMPORALY_UNAVAILABLE = "Temporairement inaccessible";

    /**
     * Response description "Transfer carried out".
     *
     * @var string
     */
    const RESPONSE_DESC_TRANSFER_CARRIED_OUT = "Transfert effectué";

    /**
     * Get the code.
     *
     * @return integer Returns the code.
     */
    public function getCode();

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription();
}
