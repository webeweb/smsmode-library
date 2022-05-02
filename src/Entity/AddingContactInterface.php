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

use DateTime;

/**
 * Adding contact interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Entity
 */
interface AddingContactInterface extends SmsModeEntityInterface {

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getSmsModeDate(): ?Datetime;

    /**
     * Get the groupes.
     *
     * @return string[] Returns the groupes.
     */
    public function getSmsModeGroupes(): array;

    /**
     * Get the mobile.
     *
     * @return string|null Returns the mobile.
     */
    public function getSmsModeMobile(): ?string;

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getSmsModeNom(): ?string;

    /**
     * Get the other.
     *
     * @return string|null Returns the other.
     */
    public function getSmsModeOther(): ?string;

    /**
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getSmsModePrenom(): ?string;

    /**
     * Get the societe.
     *
     * @return string|null Returns the societe.
     */
    public function getSmsModeSociete(): ?string;
}
