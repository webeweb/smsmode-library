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
use WBW\Library\Core\Utility\ArrayUtility;
use WBW\Library\SMSMode\API\SMSModeRequestInterface;
use WBW\Library\SMSMode\Response\SMSModeCreditTransferResponse;

/**
 * sMsmode credit transfer request.
 *
 * cf. 6 Transfert de crédits de compte à compte
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 * @final
 */
final class SMSModeCreditTransferRequest implements SMSModeRequestInterface {

    /**
     * Credit.
     *
     * @var integer
     */
    private $credit;

    /**
     * Reference.
     *
     * @var string
     */
    private $reference;

    /**
     * Username.
     *
     * @var string
     */
    private $username;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING DTO DO.
    }

    /**
     * Get the credit.
     *
     * @return integer Returns the credit.
     */
    public function getCredit() {
        return $this->credit;
    }

    /**
     * Get the reference.
     *
     * @return string Returns the reference.
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return "creditTransfert.do";
    }

    /**
     * Get the username.
     *
     * @return string Returns the username.
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * {@inheritdoc}
     */
    public function parseResponse($rawResponse) {
        return new SMSModeCreditTransferResponse($rawResponse);
    }

    /**
     * Set the credit.
     *
     * @param integer $credit The credit.
     * @return SMSModeCreditTransferRequest Returns the sMsmode credit transfer request.
     */
    public function setCredit($credit) {
        $this->credit = $credit;
        return $this;
    }

    /**
     * Set the reference.
     *
     * @param string $reference The reference.
     * @return SMSModeCreditTransferRequest Returns the sMsmode credit transfer request.
     */
    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Set the username.
     *
     * @param string $username The username.
     * @return SMSModeCreditTransferRequest Returns the sMsmode credit transfer request.
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the required setting username.
        if (null === $this->username) {
            throw new NullPointerException("The attribute \"username\" is missing");
        }
        $output["targetPseudo"] = $this->username;

        // Check the required setting credit.
        if (null === $this->credit) {
            throw new NullPointerException("The attribute \"credit\" is missing");
        }
        $output["creditAmount"] = $this->credit;

        // Check the optional attributes.
        ArrayUtility::set($output, "reference", $this->reference, [null]);

        // Return the output.
        return $output;
    }

}
