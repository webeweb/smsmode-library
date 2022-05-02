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
 * Creating sub-account interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Entity
 */
interface CreatingSubAccountInterface extends SmsModeEntityInterface {

    /**
     * Get the adresse.
     *
     * @return string|null Returns the adresse.
     */
    public function getSmsModeAdresse(): ?string;

    /**
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getSmsModeCodePostal(): ?string;

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getSmsModeDate(): ?Datetime;

    /**
     * Get the email.
     *
     * @return string|null Returns the email.
     */
    public function getSmsModeEmail(): ?string;

    /**
     * Get the fax.
     *
     * @return string|null Returns the fax.
     */
    public function getSmsModeFax(): ?string;

    /**
     * Get the mobile.
     *
     * @return string|null Returns the mobile.
     */
    public function getSmsModeMobile(): ?string;

    /**
     * Get the new pass.
     *
     * @return string|null Returns the new pass.
     */
    public function getSmsModeNewPass(): ?string;

    /**
     * Get the new pseudo.
     *
     * @return string|null Returns the new pseudo.
     */
    public function getSmsModeNewPseudo(): ?string;

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getSmsModeNom(): ?string;

    /**
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getSmsModePrenom(): ?string;

    /**
     * Get the reference.
     *
     * @return string|null Returns the reference.
     */
    public function getSmsModeReference(): ?string;

    /**
     * Get the societe.
     *
     * @return string|null Returns the societe.
     */
    public function getSmsModeSociete(): ?string;

    /**
     * Get the telephone.
     *
     * @return string|null Returns the telephone.
     */
    public function getSmsModeTelephone(): ?string;

    /**
     * Get the ville.
     *
     * @return string|null Returns the ville.
     */
    public function getSmsModeVille(): ?string;
}
