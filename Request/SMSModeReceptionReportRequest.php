<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\SMSModeRequestInterface;
use WBW\Library\SMSMode\Response\SMSModeReceptionReportResponse;

/**
 * sMsmode reception report request.
 *
 * cf. 3 Compte-rendu de réception
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author webeweb <https://github.com/webeweb/>
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

        // Check the required attribute "smsID".
        if (null === $this->smsID) {
            throw new NullPointerException("The attribute \"smsID\" is missing");
        }
        $output["smsID"] = $this->smsID;

        // Return the output.
        return $output;
    }

}
