<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API\Request;

use DateTime;
use WBW\Library\SMSMode\API\RequestInterface;

/**
 * Adding contact request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface AddingContactRequestInterface extends RequestInterface {

    /**
     * Adding contact resource path.
     *
     * @var string
     */
    const ADDING_CONTACT_RESOURCE_PATH = "/1.6/addContact.do";

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getDate();

    /**
     * Get the groupes.
     *
     * @return string[] Returns the groupes.
     */
    public function getGroupes();

    /**
     * Get the mobile.
     *
     * @return string Returns the mobile.
     */
    public function getMobile();

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getNom();

    /**
     * Get the other.
     *
     * @return string Returns the other.
     */
    public function getOther();

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom();

    /**
     * Get the societe.
     *
     * @return string Returns the societe.
     */
    public function getSociete();

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return AddingContactRequestInterface Returns this adding contact request.
     */
    public function setDate(DateTime $date = null);

    /**
     * Set the groupes.
     *
     * @param string[] $groupes The groupes.
     * @return AddingContactRequestInterface Returns this adding contact request.
     */
    public function setGroupes(array $groupes);

    /**
     * Set the mobile.
     *
     * @param string $mobile The mobile.
     * @return AddingContactRequestInterface Returns this adding contact request.
     */
    public function setMobile($mobile);

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return AddingContactRequestInterface Returns this adding contact request.
     */
    public function setNom($nom);

    /**
     * Set the other.
     *
     * @param string $other The other.
     * @return AddingContactRequestInterface Returns this adding contact request.
     */
    public function setOther($other);

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return AddingContactRequestInterface Returns this adding contact request.
     */
    public function setPrenom($prenom);

    /**
     * Set the societe.
     *
     * @param string $societe The societe.
     * @return AddingContactRequestInterface Returns this adding contact request.
     */
    public function setSociete($societe);
}
