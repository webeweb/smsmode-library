<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use DateTime;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\Core\Utility\Argument\ArrayUtility;
use WBW\Library\SMSMode\API\SMSModeRequestInterface;
use WBW\Library\SMSMode\Response\SMSModeCreateSubaccountResponse;

/**
 * sMsmode create subaccount request.
 *
 * cf. 5 Création de sous-compte
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class SMSModeCreateSubaccountRequest implements SMSModeRequestInterface {

    /**
     * Address.
     *
     * @var string
     */
    private $address;

    /**
     * Birthdate.
     *
     * @var DateTime
     */
    private $birthdate;

    /**
     * City.
     *
     * @var string
     */
    private $city;

    /**
     * Company.
     *
     * @var string
     */
    private $company;

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
     * Firstname.
     *
     * @var string
     */
    private $firstname;

    /**
     * Lastname.
     *
     * @var string
     */
    private $lastname;

    /**
     * Mobile phone.
     *
     * @var string
     */
    private $mobilePhone;

    /**
     * Password.
     *
     * @var string
     */
    private $password;

    /**
     * Phone.
     *
     * @var string
     */
    private $phone;

    /**
     * Postal code.
     *
     * @var string
     */
    private $postalCode;

    /**
     * Reference.
     *
     * @var string
     */
    private $reference;

    /**
     * Username.
     *
     * @var string
     */
    private $username;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the address.
     *
     * @return string Returns the address.
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Get the birthdate.
     *
     * @return DateTime Returns the birthdate.
     */
    public function getBirthdate() {
        return $this->birthdate;
    }

    /**
     * Get the city.
     *
     * @return string Returns the city.
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Get the company.
     *
     * @return string Returns the company.
     */
    public function getCompany() {
        return $this->company;
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
     * Get the firstname.
     *
     * @return string Returns the fistname.
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Get the lastname.
     *
     * @return string Returns the lastname.
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Get the mobile phone.
     *
     * @return string Returns the mobile phone.
     */
    public function getMobilePhone() {
        return $this->mobilePhone;
    }

    /**
     * Get the password.
     *
     * @return string Returns the password.
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Get the phone.
     *
     * @return string Returns the phone.
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * Get the postal code.
     *
     * @return string Returns the postal code.
     */
    public function getPostalCode() {
        return $this->postalCode;
    }

    /**
     * Get the reference.
     *
     * @return string Returns the reference.
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return "createSubAccount.do";
    }

    /**
     * Get the username.
     *
     * @return string Returns the username.
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * {@inheritdoc}
     */
    public function parseResponse($rawResponse) {
        return new SMSModeCreateSubaccountResponse($rawResponse);
    }

    /**
     * Set the address.
     *
     * @param string $address The address.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    /**
     * Set the birthdate.
     *
     * @param DateTime $birthdate The birthdate.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setBirthdate(DateTime $birthdate = null) {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * Set the city.
     *
     * @param string $city The city.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    /**
     * Set the company.
     *
     * @param string $company The company.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setCompany($company) {
        $this->company = $company;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string $fax The fax.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the firstname.
     *
     * @param string $firstname The firstname.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Set the lastname.
     *
     * @param string $lastname The lastname.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Set the mobile phone.
     *
     * @param string $mobilePhone The mobile phone.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setMobilePhone($mobilePhone) {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * Set the password.
     *
     * @param string $password The password.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the phone.
     *
     * @param string $phone The phone.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Set the postal code.
     *
     * @param string $postalCode The postal code.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Set the reference.
     *
     * @param string $reference The reference.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Set the username.
     *
     * @param string $username The username.
     * @return SMSModeCreateSubaccountRequest Returns this sMsmode create subaccount request.
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the required attribute "username".
        if (null === $this->username) {
            throw new NullPointerException("The attribute \"username\" is missing");
        }

        // Check the required attribute "password".
        if (null === $this->password) {
            throw new NullPointerException("The attribute \"password\" is missing");
        }

        // Add the required attributes.
        $output["newPseudo"] = $this->username;
        $output["newPass"]   = $this->password;

        // Check and add the optional attributes.
        ArrayUtility::set($output, "reference", $this->reference, [null]);
        ArrayUtility::set($output, "nom", $this->lastname, [null]);
        ArrayUtility::set($output, "prenom", $this->firstname, [null]);
        ArrayUtility::set($output, "societe", $this->company, [null]);
        ArrayUtility::set($output, "adresse", $this->address, [null]);
        ArrayUtility::set($output, "ville", $this->city, [null]);
        ArrayUtility::set($output, "codePostal", $this->postalCode, [null]);
        ArrayUtility::set($output, "mobile", $this->mobilePhone, [null]);
        ArrayUtility::set($output, "telephone", $this->phone, [null]);
        ArrayUtility::set($output, "fax", $this->fax, [null]);
        ArrayUtility::set($output, "email", $this->email, [null]);
        if (null !== $this->birthdate) {
            ArrayUtility::set($output, "date", $this->birthdate->format(self::DATE_FORMAT), [null]);
        }

        // Return the output.
        return $output;
    }

}
