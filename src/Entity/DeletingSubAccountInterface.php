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
 * Deleting sub-account interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Entity
 */
interface DeletingSubAccountInterface extends SmsModeEntityInterface {

    /**
     * Get the pseudo to delete.
     *
     * @return string|null Returns the pseudo to delete.
     */
    public function getSmsModePseudoToDelete(): ?string;
}
