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

use DateTime;

/**
 * Adding contact interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Entity
 */
interface AddingContactInterface extends SMSModeEntityInterface {

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getSMSModeDate(): ?Datetime;

    /**
     * Get the groupes.
     *
     * @return string[] Returns the groupes.
     */
    public function getSMSModeGroupes(): array;

    /**
     * Get the mobile.
     *
     * @return string|null Returns the mobile.
     */
    public function getSMSModeMobile(): ?string;

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getSMSModeNom(): ?string;

    /**
     * Get the other.
     *
     * @return string|null Returns the other.
     */
    public function getSMSModeOther(): ?string;

    /**
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getSMSModePrenom(): ?string;

    /**
     * Get the societe.
     *
     * @return string|null Returns the societe.
     */
    public function getSMSModeSociete(): ?string;
}
