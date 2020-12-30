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
 * Sending SMS message interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Entity
 */
interface SendingSMSMessageInterface extends SMSModeEntityInterface {

    /**
     * Get the classe msg.
     *
     * @return int|null Returns the classe msg.
     */
    public function getSMSModeClasseMsg(): ?int;

    /**
     * Get the date envoi.
     *
     * @return DateTime|null Returns the date envoi.
     */
    public function getSMSModeDateEnvoi(): ?DateTime;

    /**
     * Get the emetteur.
     *
     * @return string|null Returns the emetteur.
     */
    public function getSMSModeEmetteur(): ?string;

    /**
     * Get the groupe.
     *
     * @return string|null Returns the groupe.
     */
    public function getSMSModeGroupe(): ?string;

    /**
     * Get the message.
     *
     * @return string|null Returns the message.
     */
    public function getSMSModeMessage(): ?string;

    /**
     * Get the nbr msg.
     *
     * @return int|null Returns the nbr msg.
     */
    public function getSMSModeNbrMsg(): ?int;

    /**
     * Get the notification URL.
     *
     * @return string|null Returns the notification URL.
     */
    public function getSMSModeNotificationUrl(): ?string;

    /**
     * Get the notification URL reponse.
     *
     * @return string|null Returns the notification URL reponse.
     */
    public function getSMSModeNotificationUrlReponse(): ?string;

    /**
     * Get the numero.
     *
     * @return string[] Returns the numero.
     */
    public function getSMSModeNumero(): array;

    /**
     * Get the ref client.
     *
     * @return string|null Returns the ref client.
     */
    public function getSMSModeRefClient(): ?string;

    /**
     * Get the stop.
     *
     * @return int|null Returns the stop.
     */
    public function getSMSModeStop(): ?int;
}
