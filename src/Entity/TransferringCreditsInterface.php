<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Entity;

/**
 * Transferring credits interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Entity
 */
interface TransferringCreditsInterface extends SmsModeEntityInterface {

    /**
     * Get the credit amount.
     *
     * @return int|null Returns the credit amount.
     */
    public function getSmsModeCreditAmount(): ?int;

    /**
     * Get the reference.
     *
     * @return string|null Returns the reference.
     */
    public function getSmsModeReference(): ?string;

    /**
     * Get the target pseudo.
     *
     * @return string|null Returns the target pseudo.
     */
    public function getSmsModeTargetPseudo(): ?string;
}
