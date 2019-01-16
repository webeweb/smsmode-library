<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use DateTime;
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\CreatingSubAccountRequestInterface;

/**
 * Create sub-account request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class CreatingSubAccountRequest extends AbstractRequest implements CreatingSubAccountRequestInterface {

    /**
     * Adresse.
     *
     * @var string
     */
    private $adresse;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Date.
     *
     * @var DateTime
     */
    private $date;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Fax.
     *
     * @var string
     */
    private $fax;

    /**
     * Mobile.
     *
     * @var string
     */
    private $mobile;

    /**
     * New pass.
     *
     * @var string
     */
    private $newPass;

    /**
     * New pseudo.
     *
     * @var string
     */
    private $newPseudo;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Reference.
     *
     * @var string
     */
    private $reference;

    /**
     * Company.
     *
     * @var string
     */
    private $societe;

    /**
     * Telephone.
     *
     * @var string
     */
    private $telephone;

    /**
     * Ville.
     *
     * @var string
     */
    private $ville;

    /**
     * {@inheritdoc}
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * {@inheritdoc}
     */
    public function getCodePostal() {
        return $this->codePostal;
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
    public function getEmail() {
        return $this->email;
    }

    /**
     * {@inheritdoc}
     */
    public function getFax() {
        return $this->fax;
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
    public function getNewPass() {
        return $this->newPass;
    }

    /**
     * {@inheritdoc}
     */
    public function getNewPseudo() {
        return $this->newPseudo;
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
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * {@inheritdoc}
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::CREATING_SUB_ACCOUNT_RESOURCE_PATH;
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
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * {@inheritdoc}
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * {@inheritdoc}
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
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
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setFax($fax) {
        $this->fax = $fax;
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
    public function setNewPass($newPass) {
        $this->newPass = $newPass;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setNewPseudo($newPseudo) {
        $this->newPseudo = $newPseudo;
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
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setReference($reference) {
        $this->reference = $reference;
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
     * {@inheritdoc}
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the mandatory parameters.
        if (null === $this->newPseudo) {
            throw new NullPointerException("The mandatory parameter \"newPseudo\" is missing");
        }
        if (null === $this->newPass) {
            throw new NullPointerException("The mandatory parameter \"newPass\" is missing");
        }

        // Add the mandatory parameters.
        $output["newPseudo"] = $this->newPseudo;
        $output["newPass"]   = $this->newPass;

        // Check and add the optional parameters.
        ArrayHelper::set($output, "reference", $this->reference, [null]);
        ArrayHelper::set($output, "nom", $this->nom, [null]);
        ArrayHelper::set($output, "prenom", $this->prenom, [null]);
        ArrayHelper::set($output, "societe", $this->societe, [null]);
        ArrayHelper::set($output, "adresse", $this->adresse, [null]);
        ArrayHelper::set($output, "ville", $this->ville, [null]);
        ArrayHelper::set($output, "codePostal", $this->codePostal, [null]);
        ArrayHelper::set($output, "mobile", $this->mobile, [null]);
        ArrayHelper::set($output, "telephone", $this->telephone, [null]);
        ArrayHelper::set($output, "fax", $this->fax, [null]);
        ArrayHelper::set($output, "email", $this->email, [null]);
        if (null !== $this->date) {
            ArrayHelper::set($output, "date", $this->date->format(self::REQUEST_DATE_FORMAT), [null]);
        }

        // Return the output.
        return $output;
    }
}
