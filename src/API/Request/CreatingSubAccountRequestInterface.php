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
 * Creating sub-account request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface CreatingSubAccountRequestInterface extends RequestInterface {

    /**
     * Creating sub-account resource path.
     *
     * @avr string
     */
    const CREATING_SUB_ACCOUNT_RESOURCE_PATH = "/1.6/createSubAccount.do";

    /**
     * Get the adresse.
     *
     * @return string Returns the adresse.
     */
    public function getAdresse();

    /**
     * Get the code postal.
     *
     * @return string Returns the code postal.
     */
    public function getCodePostal();

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getDate();

    /**
     * Get the email.
     *
     * @return string Returns the email.
     */
    public function getEmail();

    /**
     * Get the fax.
     *
     * @return string Returns the fax.
     */
    public function getFax();

    /**
     * Get the mobile.
     *
     * @return string Returns the mobile.
     */
    public function getMobile();

    /**
     * Get the new pass.
     *
     * @return string Returns the new pass.
     */
    public function getNewPass();

    /**
     * Get the new pseudo.
     *
     * @return string Returns the new pseudo.
     */
    public function getNewPseudo();

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getNom();

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom();

    /**
     * Get the reference.
     *
     * @return string Returns the reference.
     */
    public function getReference();

    /**
     * Get the societe.
     *
     * @return string Returns the societe.
     */
    public function getSociete();

    /**
     * Get the telephone.
     *
     * @return string Returns the telephone.
     */
    public function getTelephone();

    /**
     * Get the ville.
     *
     * @return string Returns the ville.
     */
    public function getVille();

    /**
     * Set the adresse.
     *
     * @param string $adresse The adresse.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setAdresse($adresse);

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setCodePostal($codePostal);

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setDate(DateTime $date = null);

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setEmail($email);

    /**
     * Set the fax.
     *
     * @param string $fax The fax.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setFax($fax);

    /**
     * Set the mobile.
     *
     * @param string $mobile The mobile.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setMobile($mobile);

    /**
     * Set the new pass.
     *
     * @param string $newPass The new pass.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setNewPass($newPass);

    /**
     * Set the new pseudo.
     *
     * @param string $newPseudo The new pseudo.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setNewPseudo($newPseudo);

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setNom($nom);

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setPrenom($prenom);

    /**
     * Set the reference.
     *
     * @param string $reference The reference.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setReference($reference);

    /**
     * Set the societe.
     *
     * @param string $societe The societe.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setSociete($societe);

    /**
     * Set the telephone.
     *
     * @param string $telephone The telephone.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setTelephone($telephone);

    /**
     * Set the ville.
     *
     * @param string $ville The ville.
     * @return SMSModeCreateSubaccountRequest Returns this creating sub-account request.
     */
    public function setVille($ville);
}
