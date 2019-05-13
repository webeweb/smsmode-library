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
 * Sending SMS message interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Entity
 */
interface SendingSMSMessageInterface extends SMSModeEntityInterface {

    /**
     * Get the classe msg.
     *
     * @return int Returns the classe msg.
     */
    public function getSMSModeClasseMsg();

    /**
     * Get the date envoi.
     *
     * @return DateTime Returns the date envoi.
     */
    public function getSMSModeDateEnvoi();

    /**
     * Get the emetteur.
     *
     * @return string Returns the emetteur.
     */
    public function getSMSModeEmetteur();

    /**
     * Get the groupe.
     *
     * @return string Returns the groupe.
     */
    public function getSMSModeGroupe();

    /**
     * Get the message.
     *
     * @return string Returns the message.
     */
    public function getSMSModeMessage();

    /**
     * Get the nbr msg.
     *
     * @return int Returns the nbr msg.
     */
    public function getSMSModeNbrMsg();

    /**
     * Get the notification URL.
     *
     * @return string Returns the notification URL.
     */
    public function getSMSModeNotificationUrl();

    /**
     * Get the notification URL reponse.
     *
     * @return string Returns the notification URL reponse.
     */
    public function getSMSModeNotificationUrlReponse();

    /**
     * Get the numero.
     *
     * @return string[] Returns the numero.
     */
    public function getSMSModeNumero();

    /**
     * Get the ref client.
     *
     * @return string Returns the ref client.
     */
    public function getSMSModeRefClient();

    /**
     * Get the stop.
     *
     * @return int Returns the stop.
     */
    public function getSMSModeStop();
}
