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
 * Transferring credits request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class TransferringCreditsRequest extends AbstractRequest {

    /**
     * Credit amount.
     *
     * @var int
     */
    private $creditAmount;

    /**
     * Reference.
     *
     * @var string
     */
    private $reference;

    /**
     * Target pseudo.
     *
     * @var string
     */
    private $targetPseudo;

    /**
     * Get the credit amount.
     *
     * @return int Returns the credit amount.
     */
    public function getCreditAmount() {
        return $this->creditAmount;
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
     * Get the target pseudo.
     *
     * @return string Returns the target pseudo.
     */
    public function getTargetPseudo() {
        return $this->targetPseudo;
    }

    /**
     * Set the credit amount.
     *
     * @param int $creditAmount The credit amount.
     * @return TransferringCreditsRequest Returns this transferring credits request.
     */
    public function setCreditAmount($creditAmount) {
        $this->creditAmount = $creditAmount;
        return $this;
    }

    /**
     * Set the reference.
     *
     * @param string $reference The reference.
     * @return TransferringCreditsRequest Returns this transferring credits request.
     */
    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Set the target pseudo.
     *
     * @param string $targetPseudo The target pseudo.
     * @return TransferringCreditsRequest Returns this transferring credits request.
     */
    public function setTargetPseudo($targetPseudo) {
        $this->targetPseudo = $targetPseudo;
        return $this;
    }
}
