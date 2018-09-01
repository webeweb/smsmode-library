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
use WBW\Library\SMSMode\Response\SMSModeDeleteSubaccountResponse;

/**
 * sMsmode delete subaccount request.
 *
 * cf. 5 Création de sous-compte
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class SMSModeDeleteSubaccountRequest implements SMSModeRequestInterface {

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
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return "deleteSubAccount.do";
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
        return new SMSModeDeleteSubaccountResponse($rawResponse);
    }

    /**
     * Set the username.
     *
     * @param string $username The username.
     * @return SMSModeDeleteSubaccountRequest Returns this delete subaccount request.
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

        // Check the required attribute "username".
        if (null === $this->username) {
            throw new NullPointerException("The attribute \"username\" is missing");
        }

        // Add the required attribute.
        $output["pseudoToDelete"] = $this->username;

        // Return the output.
        return $output;
    }

}