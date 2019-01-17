<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use DateTime;
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\AddingContactRequestInterface;

/**
 * Adding contact request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class AddingContactRequest extends AbstractRequest implements AddingContactRequestInterface {

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
     * {@inheritdoc}
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupes() {
        return $this->groupes;
    }

    /**
     * {@inheritdoc}
     */
    public function getMobile() {
        return $this->mobile;
    }

    /**
     * {@inheritdoc}
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * {@inheritdoc}
     */
    public function getOther() {
        return $this->other;
    }

    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function getSociete() {
        return $this->societe;
    }

    /**
     * {@inheritdoc}
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setGroupes(array $groupes) {
        $this->groupes = $groupes;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setMobile($mobile) {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setOther($other) {
        $this->other = $other;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSociete($societe) {
        $this->societe = $societe;
        return $this;
    }

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the mandatory parameters.
        if (null === $this->nom) {
            throw new NullPointerException("The mandatory parameter \"nom\" is missing");
        }
        if (null === $this->mobile) {
            throw new NullPointerException("The mandatory parameter \"mobile\" is missing");
        }

        // Add the mandatory parameters.
        $output["nom"]    = $this->nom;
        $output["mobile"] = $this->mobile;

        // Check and add the optional parameters.
        ArrayHelper::set($output, "prenom", $this->prenom, [null]);
        if (0 < count($this->groupes)) {
            $output["groupes"] = implode(",", $this->groupes);
        }
        ArrayHelper::set($output, "societe", $this->societe, [null]);
        ArrayHelper::set($output, "other", $this->other, [null]);
        if (null !== $this->date) {
            ArrayHelper::set($output, "date", $this->date->format(self::REQUEST_DATE_FORMAT), [null]);
        }

        // Return the output.
        return $output;
    }
}
