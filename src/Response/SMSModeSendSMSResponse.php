<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Response;

/**
 * sMsmode send SMS response.
 *
 * cf. 2 Envoi de SMS
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 */
class SMSModeSendSMSResponse extends AbstractSMSModeResponse {

    /**
     * SMS id.
     *
     * @var string
     */
    private $smsID;

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
    protected function parse($rawResponse) {

        // Set the code and description.
        parent::parse($rawResponse);

        // Explode the response.
        $response = explode(self::RESPONSE_DELIMITER, $rawResponse);

        // Check the code.
        if (self::RESPONSE_CODE_ACCEPTED === $this->getCode() && 3 === count($response)) {
            $this->setSmsID(trim($response[2]));
        }
    }

    /**
     * Set the SMS id.
     *
     * @param string $smsID The SMS id.
     * @return SMSModeSendSMSResponse Returns this send SMS response.
     */
    public function setSmsID($smsID) {
        $this->smsID = $smsID;
        return $this;
    }

}
