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

use WBW\Library\Traits\Strings\StringReferenceTrait;

/**
 * Transferring credits request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Request
 */
class TransferringCreditsRequest extends AbstractRequest {

    use StringReferenceTrait;

    /**
     * Transferring credits resource path.
     *
     * @var string
     */
    const TRANSFERRING_CREDITS_RESOURCE_PATH = "/http/1.6/creditTransfert.do";

    /**
     * Credit amount.
     *
     * @var int|null
     */
    private $creditAmount;

    /**
     * Target pseudo.
     *
     * @var string|null
     */
    private $targetPseudo;

    /**
     * Get the credit amount.
     *
     * @return int|null Returns the credit amount.
     */
    public function getCreditAmount(): ?int {
        return $this->creditAmount;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::TRANSFERRING_CREDITS_RESOURCE_PATH;
    }

    /**
     * Get the target pseudo.
     *
     * @return string|null Returns the target pseudo.
     */
    public function getTargetPseudo(): ?string {
        return $this->targetPseudo;
    }

    /**
     * Set the credit amount.
     *
     * @param int|null $creditAmount The credit amount.
     * @return TransferringCreditsRequest Returns this transferring credits request.
     */
    public function setCreditAmount(?int $creditAmount): TransferringCreditsRequest {
        $this->creditAmount = $creditAmount;
        return $this;
    }

    /**
     * Set the target pseudo.
     *
     * @param string|null $targetPseudo The target pseudo.
     * @return TransferringCreditsRequest Returns this transferring credits request.
     */
    public function setTargetPseudo(?string $targetPseudo): TransferringCreditsRequest {
        $this->targetPseudo = $targetPseudo;
        return $this;
    }
}
