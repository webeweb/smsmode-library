<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

/**
 * Deleting sub-account request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class DeletingSubAccountRequest extends AbstractRequest {

    /**
     * Pseudo to delete.
     *
     * @var string
     */
    private $pseudoToDelete;

    /**
     * Get the pseudo to delete.
     *
     * @return string Returns the pseudo to delete.
     */
    public function getPseudoToDelete() {
        return $this->pseudoToDelete;
    }

    /**
     * Set the pseudo to delete.
     *
     * @param string $pseudoToDelete The pseudo to delete.
     * @return DeletingSubAccountRequest Returns this deleting sub-account request.
     */
    public function setPseudoToDelete($pseudoToDelete) {
        $this->pseudoToDelete = $pseudoToDelete;
        return $this;
    }
}
