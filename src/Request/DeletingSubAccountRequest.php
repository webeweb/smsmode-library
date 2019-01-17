<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\DeletingSubAccountRequestInterface;

/**
 * Deleting sub-account request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class DeletingSubAccountRequest extends AbstractRequest implements DeletingSubAccountRequestInterface {

    /**
     * Pseudo to delete.
     *
     * @var string
     */
    private $pseudoToDelete;

    /**
     * {@inheritdoc}
     */
    public function getPseudoToDelete() {
        return $this->pseudoToDelete;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::DELETING_SUB_ACCOUNT_RESOURCE_PATH;
    }

    /**
     * {@inheritdoc}
     */
    public function setPseudoToDelete($pseudoToDelete) {
        $this->pseudoToDelete = $pseudoToDelete;
        return $this;
    }

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the mandatory parameter "username".
        if (null === $this->pseudoToDelete) {
            throw new NullPointerException("The mandatory parameter \"pseudoToDelete\" is missing");
        }

        // Add the required attribute.
        $output["pseudoToDelete"] = $this->pseudoToDelete;

        // Return the output.
        return $output;
    }
}
