<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API\Request;

use WBW\Library\SMSMode\API\RequestInterface;

/**
 * Deleting sub-account request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface DeletingSubAccountRequestInterface extends RequestInterface {

    /**
     * Deleting sub-account resource path.
     *
     * @var string
     */
    const DELETING_SUB_ACCOUNT_RESOURCE_PATH = "/1.6/deleteSubAccount.do";

    /**
     * Get the pseudo to delete.
     *
     * @return string Returns the pseudo to delete.
     */
    public function getPseudoToDelete();

    /**
     * Set the pseudo to delete.
     *
     * @param string $pseudoToDelete The pseudo to delete.
     * @return DeletingSubAccountRequestInterface Returns this deleting sub-account request.
     */
    public function setPseudoToDelete($pseudoToDelete);
}
