<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model\Request;

use UnexpectedValueException;
use WBW\Library\SMSMode\Model\AbstractRequest;
use WBW\Library\SMSMode\Serializer\NumeroSerializer;
use WBW\Library\SMSMode\Traits\DateTrait;
use WBW\Library\SMSMode\Traits\MobileTrait;
use WBW\Library\SMSMode\Traits\NomTrait;
use WBW\Library\SMSMode\Traits\PrenomTrait;
use WBW\Library\SMSMode\Traits\ReferenceTrait;
use WBW\Library\SMSMode\Traits\SocieteTrait;

/**
 * Creating sub-account request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Request
 */
class CreatingSubAccountRequest extends AbstractRequest {

    use DateTrait;
    use MobileTrait;
    use NomTrait;
    use PrenomTrait;
    use ReferenceTrait;
    use SocieteTrait;

    /**
     * Creating sub-account resource path.
     *
     * @avr string
     */
    const CREATING_SUB_ACCOUNT_RESOURCE_PATH = "/http/1.6/createSubAccount.do";

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
     * Get the adresse.
     *
     * @return string Returns the adresse.
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Get the code postal.
     *
     * @return string Returns the code postal.
     */
    public function getCodePostal() {
        return $this->codePostal;
    }

    /**
     * Get the email.
     *
     * @return string Returns the email.
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Get the fax.
     *
     * @return string Returns the fax.
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * Get the new pass.
     *
     * @return string Returns the new pass.
     */
    public function getNewPass() {
        return $this->newPass;
    }

    /**
     * Get the new pseudo.
     *
     * @return string Returns the new pseudo.
     */
    public function getNewPseudo() {
        return $this->newPseudo;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::CREATING_SUB_ACCOUNT_RESOURCE_PATH;
    }

    /**
     * Get the telephone.
     *
     * @return string Returns the telephone.
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Get the ville.
     *
     * @return string Returns the ville.
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Set the adresse.
     *
     * @param string $adresse The adresse.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string $fax The fax.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     * @thows UnexpectedValueException Throws an unexpected value exception if the fax is invalid.
     */
    public function setFax($fax) {
        NumeroSerializer::checkNumero($fax);
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the mobile.
     *
     * @param string $mobile The mobile.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the mobile is invalid.
     */
    public function setMobile($mobile) {
        NumeroSerializer::checkNumero($mobile);
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Set the new pass.
     *
     * @param string $newPass The new pass.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setNewPass($newPass) {
        $this->newPass = $newPass;
        return $this;
    }

    /**
     * Set the new pseudo.
     *
     * @param string $newPseudo The new pseudo.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setNewPseudo($newPseudo) {
        $this->newPseudo = $newPseudo;
        return $this;
    }

    /**
     * Set the telephone.
     *
     * @param string $telephone The telephone.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the numero is invalid.
     */
    public function setTelephone($telephone) {
        NumeroSerializer::checkNumero($telephone);
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Set the ville.
     *
     * @param string $ville The ville.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }
}
