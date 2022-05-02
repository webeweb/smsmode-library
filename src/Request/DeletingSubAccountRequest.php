<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Request;

/**
 * Deleting sub-account request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Request
 */
class DeletingSubAccountRequest extends AbstractRequest {

    /**
     * Deleting sub-account resource path.
     *
     * @var string
     */
    const DELETING_SUB_ACCOUNT_RESOURCE_PATH = "/http/1.6/deleteSubAccount.do";

    /**
     * Pseudo to delete.
     *
     * @var string|null
     */
    private $pseudoToDelete;

    /**
     * Get the pseudo to delete.
     *
     * @return string|null Returns the pseudo to delete.
     */
    public function getPseudoToDelete(): ?string {
        return $this->pseudoToDelete;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::DELETING_SUB_ACCOUNT_RESOURCE_PATH;
    }

    /**
     * Set the pseudo to delete.
     *
     * @param string|null $pseudoToDelete The pseudo to delete.
     * @return DeletingSubAccountRequest Returns this deleting sub-account request.
     */
    public function setPseudoToDelete(?string $pseudoToDelete): DeletingSubAccountRequest {
        $this->pseudoToDelete = $pseudoToDelete;
        return $this;
    }
}
