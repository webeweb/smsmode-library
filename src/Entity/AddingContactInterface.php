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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Entity
 */
interface AddingContactInterface extends SMSModeEntityInterface {

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getSMSModeDate();

    /**
     * Get the groupes.
     *
     * @return string[] Returns the groupes.
     */
    public function getSMSModeGroupes();

    /**
     * Get the mobile.
     *
     * @return string Returns the mobile.
     */
    public function getSMSModeMobile();

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getSMSModeNom();

    /**
     * Get the other.
     *
     * @return string Returns the other.
     */
    public function getSMSModeOther();

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getSMSModePrenom();

    /**
     * Get the societe.
     *
     * @return string Returns the societe.
     */
    public function getSMSModeSociete();
}
