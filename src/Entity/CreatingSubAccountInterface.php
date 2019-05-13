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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Entity
 */
interface CreatingSubAccountInterface extends SMSModeEntityInterface {

    /**
     * Get the adresse.
     *
     * @return string Returns the adresse.
     */
    public function getSMSModeAdresse();

    /**
     * Get the code postal.
     *
     * @return string Returns the code postal.
     */
    public function getSMSModeCodePostal();

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getSMSModeDate();

    /**
     * Get the email.
     *
     * @return string Returns the email.
     */
    public function getSMSModeEmail();

    /**
     * Get the fax.
     *
     * @return string Returns the fax.
     */
    public function getSMSModeFax();

    /**
     * Get the mobile.
     *
     * @return string Returns the mobile.
     */
    public function getSMSModeMobile();

    /**
     * Get the new pass.
     *
     * @return string Returns the new pass.
     */
    public function getSMSModeNewPass();

    /**
     * Get the new pseudo.
     *
     * @return string Returns the new pseudo.
     */
    public function getSMSModeNewPseudo();

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getSMSModeNom();

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getSMSModePrenom();

    /**
     * Get the reference.
     *
     * @return string Returns the reference.
     */
    public function getSMSModeReference();

    /**
     * Get the societe.
     *
     * @return string Returns the societe.
     */
    public function getSMSModeSociete();

    /**
     * Get the telephone.
     *
     * @return string Returns the telephone.
     */
    public function getSMSModeTelephone();

    /**
     * Get the ville.
     *
     * @return string Returns the ville.
     */
    public function getSMSModeVille();
}
