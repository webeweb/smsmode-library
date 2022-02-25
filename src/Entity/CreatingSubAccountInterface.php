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
 * Creating sub-account interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Entity
 */
interface CreatingSubAccountInterface extends SMSModeEntityInterface {

    /**
     * Get the adresse.
     *
     * @return string|null Returns the adresse.
     */
    public function getSMSModeAdresse(): ?string;

    /**
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getSMSModeCodePostal(): ?string;

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getSMSModeDate(): ?Datetime;

    /**
     * Get the email.
     *
     * @return string|null Returns the email.
     */
    public function getSMSModeEmail(): ?string;

    /**
     * Get the fax.
     *
     * @return string|null Returns the fax.
     */
    public function getSMSModeFax(): ?string;

    /**
     * Get the mobile.
     *
     * @return string|null Returns the mobile.
     */
    public function getSMSModeMobile(): ?string;

    /**
     * Get the new pass.
     *
     * @return string|null Returns the new pass.
     */
    public function getSMSModeNewPass(): ?string;

    /**
     * Get the new pseudo.
     *
     * @return string|null Returns the new pseudo.
     */
    public function getSMSModeNewPseudo(): ?string;

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getSMSModeNom(): ?string;

    /**
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getSMSModePrenom(): ?string;

    /**
     * Get the reference.
     *
     * @return string|null Returns the reference.
     */
    public function getSMSModeReference(): ?string;

    /**
     * Get the societe.
     *
     * @return string|null Returns the societe.
     */
    public function getSMSModeSociete(): ?string;

    /**
     * Get the telephone.
     *
     * @return string|null Returns the telephone.
     */
    public function getSMSModeTelephone(): ?string;

    /**
     * Get the ville.
     *
     * @return string|null Returns the ville.
     */
    public function getSMSModeVille(): ?string;
}
