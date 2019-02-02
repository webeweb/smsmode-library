<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

use DateTime;
use UnexpectedValueException;

/**
 * Adding contact request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class AddingContactRequest extends AbstractRequest {

    /**
     * Adding contact resource path.
     *
     * @var string
     */
    const ADDING_CONTACT_RESOURCE_PATH = "/http/1.6/addContact.do";

    /**
     * Date.
     *
     * @var DateTime
     */
    private $date;

    /**
     * Groupes.
     *
     * @var string[]
     */
    private $groupes;

    /**
     * Mobile.
     *
     * @var string
     */
    private $mobile;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Other.
     *
     * @var string
     */
    private $other;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Societe.
     *
     * @var string
     */
    private $societe;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->setGroupes([]);
    }

    /**
     * Add a groupe.
     *
     * @param string $groupe The groupe.
     * @return AddingContactRequest Returns this adding contact request.
     */
    public function addGroupe($groupe) {
        $this->groupes[] = $groupe;
        return $this;
    }

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the groupes.
     *
     * @return string[] Returns the groupes.
     */
    public function getGroupes() {
        return $this->groupes;
    }

    /**
     * Get the mobile.
     *
     * @return string Returns the mobile.
     */
    public function getMobile() {
        return $this->mobile;
    }

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Get the other.
     *
     * @return string Returns the other.
     */
    public function getOther() {
        return $this->other;
    }

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::ADDING_CONTACT_RESOURCE_PATH;
    }

    /**
     * Get the societe.
     *
     * @return string Returns the societe.
     */
    public function getSociete() {
        return $this->societe;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return AddingContactRequest Returns this adding contact request.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the groupes.
     *
     * @param string[] $groupes The groupes.
     * @return AddingContactRequest Returns this adding contact request.
     */
    public function setGroupes(array $groupes) {
        $this->groupes = $groupes;
        return $this;
    }

    /**
     * Set the mobile.
     *
     * @param string $mobile The mobile.
     * @return AddingContactRequest Returns this adding contact request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the numero is invalid.
     */
    public function setMobile($mobile) {
        static::checkNumero($mobile);
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return AddingContactRequest Returns this adding contact request.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the other.
     *
     * @param string $other The other.
     * @return AddingContactRequest Returns this adding contact request.
     */
    public function setOther($other) {
        $this->other = $other;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return AddingContactRequest Returns this adding contact request.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the societe.
     *
     * @param string $societe The societe.
     * @return AddingContactRequest Returns this adding contact request.
     */
    public function setSociete($societe) {
        $this->societe = $societe;
        return $this;
    }
}
