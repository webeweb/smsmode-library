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
 * Transferring credits request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface TransferringCreditsRequestInterface extends RequestInterface {

    /**
     * Transferring credits resource path.
     *
     * @var string
     */
    const TRANSFERRING_CREDITS_RESOURCE_PATH = "/1.6/creditTransfert.do";

    /**
     * Get the credit amount.
     *
     * @return string Returns the credit amount.
     */
    public function getCreditAmount();

    /**
     * Get the reference.
     *
     * @return string Returns the reference.
     */
    public function getReference();

    /**
     * Get the target pseudo.
     *
     * @return string Returns the target pseudo.
     */
    public function getTargetPseudo();

    /**
     * Set the credit amount.
     *
     * @param string $creditAmount The credit amount.
     * @return TransferringCreditsRequestInterface Returns this transferring credits request.
     */
    public function setCreditAmount($creditAmount);

    /**
     * Set the reference.
     *
     * @param string $reference The reference.
     * @return TransferringCreditsRequestInterface Returns this transferring credits request.
     */
    public function setReference($reference);

    /**
     * Set the target pseudo.
     *
     * @param string $targetPseudo The target pseudo.
     * @return TransferringCreditsRequestInterface Returns this transferring credits request.
     */
    public function setTargetPseudo($targetPseudo);
}
