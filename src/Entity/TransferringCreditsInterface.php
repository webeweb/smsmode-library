<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Entity;

/**
 * Transferring credits interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Entity
 */
interface TransferringCreditsInterface extends SMSModeEntityInterface {

    /**
     * Get the credit amount.
     *
     * @return int Returns the credit amount.
     */
    public function getSMSModeCreditAmount();

    /**
     * Get the reference.
     *
     * @return string Returns the reference.
     */
    public function getSMSModeReference();

    /**
     * Get the target pseudo.
     *
     * @return string Returns the target pseudo.
     */
    public function getSMSModeTargetPseudo();
}
