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
 * Sending SMS message interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Entity
 */
interface SendingSmsMessageInterface extends SmsModeEntityInterface {

    /**
     * Get the classe msg.
     *
     * @return int|null Returns the classe msg.
     */
    public function getSmsModeClasseMsg(): ?int;

    /**
     * Get the date envoi.
     *
     * @return DateTime|null Returns the date envoi.
     */
    public function getSmsModeDateEnvoi(): ?DateTime;

    /**
     * Get the emetteur.
     *
     * @return string|null Returns the emetteur.
     */
    public function getSmsModeEmetteur(): ?string;

    /**
     * Get the groupe.
     *
     * @return string|null Returns the groupe.
     */
    public function getSmsModeGroupe(): ?string;

    /**
     * Get the message.
     *
     * @return string|null Returns the message.
     */
    public function getSmsModeMessage(): ?string;

    /**
     * Get the nbr msg.
     *
     * @return int|null Returns the nbr msg.
     */
    public function getSmsModeNbrMsg(): ?int;

    /**
     * Get the notification URL.
     *
     * @return string|null Returns the notification URL.
     */
    public function getSmsModeNotificationUrl(): ?string;

    /**
     * Get the notification URL reponse.
     *
     * @return string|null Returns the notification URL reponse.
     */
    public function getSmsModeNotificationUrlReponse(): ?string;

    /**
     * Get the numero.
     *
     * @return string[] Returns the numero.
     */
    public function getSmsModeNumero(): array;

    /**
     * Get the ref client.
     *
     * @return string|null Returns the ref client.
     */
    public function getSmsModeRefClient(): ?string;

    /**
     * Get the stop.
     *
     * @return int|null Returns the stop.
     */
    public function getSmsModeStop(): ?int;
}
