<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Request;

use UnexpectedValueException;
use WBW\Library\SmsMode\Serializer\NumeroSerializer;
use WBW\Library\SmsMode\Traits\Strings\StringMobileTrait;
use WBW\Library\SmsMode\Traits\Strings\StringNomTrait;
use WBW\Library\SmsMode\Traits\Strings\StringPrenomTrait;
use WBW\Library\SmsMode\Traits\Strings\StringSocieteTrait;
use WBW\Library\Traits\DateTimes\DateTimeDateTrait;
use WBW\Library\Traits\Strings\StringEmailTrait;
use WBW\Library\Traits\Strings\StringReferenceTrait;

/**
 * Creating sub-account request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Request
 */
class CreatingSubAccountRequest extends AbstractRequest {

    use DateTimeDateTrait;
    use StringEmailTrait;
    use StringMobileTrait;
    use StringNomTrait;
    use StringPrenomTrait;
    use StringReferenceTrait;
    use StringSocieteTrait;

    /**
     * Creating sub-account resource path.
     *
     * @avr string
     */
    const CREATING_SUB_ACCOUNT_RESOURCE_PATH = "/http/1.6/createSubAccount.do";

    /**
     * Adresse.
     *
     * @var string|null
     */
    private $adresse;

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Fax.
     *
     * @var string|null
     */
    private $fax;

    /**
     * New pass.
     *
     * @var string|null
     */
    private $newPass;

    /**
     * New pseudo.
     *
     * @var string|null
     */
    private $newPseudo;

    /**
     * Telephone.
     *
     * @var string|null
     */
    private $telephone;

    /**
     * Ville.
     *
     * @var string|null
     */
    private $ville;

    /**
     * Get the adresse.
     *
     * @return string|null Returns the adresse.
     */
    public function getAdresse(): ?string {
        return $this->adresse;
    }

    /**
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
    }

    /**
     * Get the fax.
     *
     * @return string|null Returns the fax.
     */
    public function getFax(): ?string {
        return $this->fax;
    }

    /**
     * Get the new pass.
     *
     * @return string|null Returns the new pass.
     */
    public function getNewPass(): ?string {
        return $this->newPass;
    }

    /**
     * Get the new pseudo.
     *
     * @return string|null Returns the new pseudo.
     */
    public function getNewPseudo(): ?string {
        return $this->newPseudo;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::CREATING_SUB_ACCOUNT_RESOURCE_PATH;
    }

    /**
     * Get the telephone.
     *
     * @return string|null Returns the telephone.
     */
    public function getTelephone(): ?string {
        return $this->telephone;
    }

    /**
     * Get the ville.
     *
     * @return string|null Returns the ville.
     */
    public function getVille(): ?string {
        return $this->ville;
    }

    /**
     * Set the adresse.
     *
     * @param string|null $adresse The adresse.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setAdresse(?string $adresse): CreatingSubAccountRequest {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setCodePostal(?string $codePostal): CreatingSubAccountRequest {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string|null $fax The fax.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     * @thows UnexpectedValueException Throws an unexpected value exception if the fax is invalid.
     */
    public function setFax(?string $fax): CreatingSubAccountRequest {
        NumeroSerializer::checkNumero($fax);
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the mobile.
     *
     * @param string|null $mobile The mobile.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the mobile is invalid.
     */
    public function setMobile(?string $mobile): CreatingSubAccountRequest {
        NumeroSerializer::checkNumero($mobile);
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Set the new pass.
     *
     * @param string|null $newPass The new pass.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setNewPass(?string $newPass): CreatingSubAccountRequest {
        $this->newPass = $newPass;
        return $this;
    }

    /**
     * Set the new pseudo.
     *
     * @param string|null $newPseudo The new pseudo.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setNewPseudo(?string $newPseudo): CreatingSubAccountRequest {
        $this->newPseudo = $newPseudo;
        return $this;
    }

    /**
     * Set the telephone.
     *
     * @param string|null $telephone The telephone.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the numero is invalid.
     */
    public function setTelephone(?string $telephone): CreatingSubAccountRequest {
        NumeroSerializer::checkNumero($telephone);
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Set the ville.
     *
     * @param string|null $ville The ville.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setVille(?string $ville): CreatingSubAccountRequest {
        $this->ville = $ville;
        return $this;
    }
}
