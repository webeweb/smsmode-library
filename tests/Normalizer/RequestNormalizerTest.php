<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Normalizer;

use DateTime;
use Exception;
use InvalidArgumentException;
use WBW\Library\SMSMode\Model\Authentication;
use WBW\Library\SMSMode\Model\Request\AccountBalanceRequest;
use WBW\Library\SMSMode\Model\Request\AddingContactRequest;
use WBW\Library\SMSMode\Model\Request\CheckingSMSMessageStatusRequest;
use WBW\Library\SMSMode\Model\Request\CreatingAPIKeyRequest;
use WBW\Library\SMSMode\Model\Request\CreatingSubAccountRequest;
use WBW\Library\SMSMode\Model\Request\DeletingSMSRequest;
use WBW\Library\SMSMode\Model\Request\DeletingSubAccountRequest;
use WBW\Library\SMSMode\Model\Request\DeliveryReportRequest;
use WBW\Library\SMSMode\Model\Request\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Model\Request\SendingSMSBatchRequest;
use WBW\Library\SMSMode\Model\Request\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Model\Request\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Model\Request\SendingUnicodeSMSRequest;
use WBW\Library\SMSMode\Model\Request\SentSMSMessageListRequest;
use WBW\Library\SMSMode\Model\Request\TransferringCreditsRequest;
use WBW\Library\SMSMode\Normalizer\RequestNormalizer;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Object normalizer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Normalizer
 */
class RequestNormalizerTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RequestNormalizer();

        $this->assertNotEmpty($obj->getConfiguration());
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeAccountBalance() {

        // Set an account balance request mock.
        $arg = new AccountBalanceRequest();

        $obj = new RequestNormalizer();

        $res = [];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeAddingContactRequest() {

        // Set an Adding contact request mock.
        $arg = new AddingContactRequest();
        $arg->setNom("nom");
        $arg->setMobile("33600000000");

        $arg->setPrenom("prenom");
        $arg->setGroupes(["groupe1", "groupe2"]);
        $arg->setSociete("societe");
        $arg->setOther("other");
        $arg->setDate(new DateTime("2017-09-12 11:00:00"));

        $obj = new RequestNormalizer();

        $res = [
            "nom"     => "nom",
            "mobile"  => "33600000000",
            "prenom"  => "prenom",
            "groupes" => "groupe1,groupe2",
            "societe" => "societe",
            "other"   => "other",
            "date"    => "12092017",
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     */
    public function testNormalizeAddingContactRequestWithoutArguments() {

        // Set an Adding contact request mock.
        $arg = new AddingContactRequest();

        $obj = new RequestNormalizer();

        try {

            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"nom\" is missing", $ex->getMessage());
        }

        try {

            $arg->setNom("nom");
            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"mobile\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeAuthentication() {

        // Set a Creating sub-account request mock.
        $arg = new Authentication();
        $arg->setPseudo("pseudo");
        $arg->setPass("pass");

        $obj = new RequestNormalizer();

        $res = [
            "pseudo" => "pseudo",
            "pass"   => "pass",
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeAuthenticationWithToken() {

        // Set a Creating sub-account request mock.
        $arg = new Authentication();
        $arg->setAccessToken("accessToken");

        $arg->setPseudo("pseudo");
        $arg->setPass("pass");

        $obj = new RequestNormalizer();

        $res = [
            "accessToken" => "accessToken",
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     */
    public function testNormalizeAuthenticationWithoutArguments() {

        // Set a Authentication mock.
        $arg = new Authentication();

        $obj = new RequestNormalizer();

        try {

            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"pseudo\" is missing", $ex->getMessage());
        }

        try {

            $arg->setPseudo("pseudo");
            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"pass\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeCheckingSMSMessageStatusRequest() {

        // Set a Checking SMS message status mock.
        $arg = new CheckingSMSMessageStatusRequest();
        $arg->setSmsID("smsID");

        $obj = new RequestNormalizer();

        $res = [
            "smsID" => "smsID",
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     */
    public function testNormalizeCheckingSMSMessageStatusRequestWithoutArguments() {

        // Set a Checking SMS message status mock.
        $arg = new CheckingSMSMessageStatusRequest();

        $obj = new RequestNormalizer();

        try {

            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"smsID\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeCreatingAPIKeyRequest() {

        // Set an Creating API key request mock.
        $arg = new CreatingAPIKeyRequest();

        $obj = new RequestNormalizer();

        $res = [];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeCreatingSubAccount() {

        // Set a Creating sub-account request mock.
        $arg = new CreatingSubAccountRequest();
        $arg->setNewPseudo("newPseudo");
        $arg->setNewPass("newPass");

        $arg->setReference("reference");
        $arg->setNom("nom");
        $arg->setPrenom("prenom");
        $arg->setSociete("societe");
        $arg->setAdresse("adresse");
        $arg->setVille("ville");
        $arg->setCodePostal("codePostal");
        $arg->setMobile("33600000000");
        $arg->setTelephone("33100000000");
        $arg->setFax("33100000000");
        $arg->setEmail("email");
        $arg->setDate(new DateTime("2017-09-12 11:00:00"));

        $obj = new RequestNormalizer();

        $res = [
            "newPseudo"  => "newPseudo",
            "newPass"    => "newPass",
            "reference"  => "reference",
            "nom"        => "nom",
            "prenom"     => "prenom",
            "societe"    => "societe",
            "adresse"    => "adresse",
            "ville"      => "ville",
            "codePostal" => "codePostal",
            "mobile"     => "33600000000",
            "telephone"  => "33100000000",
            "fax"        => "33100000000",
            "email"      => "email",
            "date"       => "12092017",
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     */
    public function testNormalizeCreatingSubAccountWithoutArguments() {

        // Set a Creating sub-account request mock.
        $arg = new CreatingSubAccountRequest();

        $obj = new RequestNormalizer();

        try {

            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"newPseudo\" is missing", $ex->getMessage());
        }

        try {

            $arg->setNewPseudo("newPseudo");
            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"newPass\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeDeletingSMSRequest() {

        // Set a Delete SMS request mock.
        $arg = new DeletingSMSRequest();
        $arg->setSmsID("smsID");

        $obj = new RequestNormalizer();

        $res1 = [
            "smsID" => "smsID",
        ];
        $this->assertEquals($res1, $obj->normalize($arg));

        $arg->setSmsID(null);
        $arg->setNumero("33600000000");

        $res2 = [
            "numero" => "33600000000",
        ];
        $this->assertEquals($res2, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     */
    public function testNormalizeDeletingSMSRequestWithoutArguments() {

        // Set a Delete SMS request mock.
        $arg = new DeletingSMSRequest();

        $obj = new RequestNormalizer();

        try {

            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"smsID\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeDeletingSubAccountRequest() {

        // Set a Deleting sub-account request mock.
        $arg = new DeletingSubAccountRequest();
        $arg->setPseudoToDelete("pseudoToDelete");

        $obj = new RequestNormalizer();

        $res = [
            "pseudoToDelete" => "pseudoToDelete",
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     */
    public function testNormalizeDeletingSubAccountRequestWithoutArguments() {

        // Set a Deleting sub-account request mock.
        $arg = new DeletingSubAccountRequest();

        $obj = new RequestNormalizer();

        try {

            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"pseudoToDelete\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeDeliveryReportRequest() {

        // Set a Delivery report request mock.
        $arg = new DeliveryReportRequest();
        $arg->setSmsID("smsID");

        $obj = new RequestNormalizer();

        $res = [
            "smsID" => "smsID",
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     */
    public function testNormalizeDeliveryReportRequestWithoutArguments() {

        // Set a Delivery report request mock.
        $arg = new DeliveryReportRequest();

        $obj = new RequestNormalizer();

        try {

            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"smsID\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeRetrievingSMSReplyRequest() {

        // Set a Retrieving SMS reply request mock.
        $arg = new RetrievingSMSReplyRequest();

        $obj = new RequestNormalizer();

        try {

            $arg->setStart(0);
            $arg->setOffset(null);
            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The optional parameter \"offset\" is required when \"start\" is provided", $ex->getMessage());
        }

        try {

            $arg->setStart(null);
            $arg->setOffset(1);
            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The optional parameter \"start\" is required when \"offset\" is provided", $ex->getMessage());
        }

        $arg->setStart(0);
        $arg->setOffset(10);

        $res = [
            "start"  => 0,
            "offset" => 10,
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeRetrievingSMSReplyRequestWithStartAndEndDate() {

        // Set a Retrieving SMS reply request mock.
        $arg = new RetrievingSMSReplyRequest();

        $obj = new RequestNormalizer();

        try {

            $arg->setStartDate(new DateTime("2017-09-14 12:00:00"));
            $obj->normalize($arg);
        } catch (Exception $ex) {
            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The optional parameter \"endDate\" is required when \"startDate\" is provided", $ex->getMessage());
        }

        try {

            $arg->setStartDate(null);
            $arg->setEndDate(new DateTime("2017-09-14 12:00:00"));
            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The optional parameter \"startDate\" is required when \"endDate\" is provided", $ex->getMessage());
        }

        try {

            $arg->setStartDate(new DateTime("2017-09-14 12:00:00"));
            $arg->setEndDate(new DateTime("2017-09-14 12:00:00"));
            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The \"endDate\" must be greater than \"startDate\"", $ex->getMessage());
        }

        $arg->setStartDate(new DateTime("2017-09-14 12:00:00"));
        $arg->setEndDate(new DateTime("2017-09-14 14:00:00"));

        $res = [
            "startDate" => "14092017-12:00",
            "endDate"   => "14092017-14:00",
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeRetrievingSMSReplyRequestWithoutArguments() {

        // Set a Retrieving SMS reply request mock.
        $arg = new RetrievingSMSReplyRequest();

        $obj = new RequestNormalizer();

        $res = [];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeSendingSMSBatchRequest() {

        // Set a Fichier mock.
        $fichier = getcwd() . "/tests/Fixtures/Model/Request/SendingSMSBatchRequest.csv";

        // Set a Sending SMS batch request mock.
        $arg = new SendingSMSBatchRequest();

        $arg->setClasseMsg(SendingSMSBatchRequest::CLASSE_MSG_SMS);
        $arg->setDateEnvoi(new DateTime("2019-02-04 18:00:00"));
        $arg->setRefClient("refClient");
        $arg->setEmetteur("emetteur");
        $arg->setFichier($fichier);
        $arg->setNbrMsg(1);
        $arg->setNotificationUrl("notificationUrl");

        $obj = new RequestNormalizer();

        $res = [
            "classe_msg"       => 4,
            "date_envoi"       => "04022019-18:00",
            "refClient"        => "refClient",
            "emetteur"         => "emetteur",
            "nbr_msg"          => 1,
            "notification_url" => "notificationUrl",
            "fichier"          => $fichier,
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     */
    public function testNormalizeSendingSMSBatchRequestWithoutArguments() {

        // Set a Sending SMS batch request mock.
        $arg = new SendingSMSBatchRequest();

        $obj = new RequestNormalizer();

        try {

            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"fichier\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeSendingSMSMessageRequest() {

        // Set a Sending SMS message request mock.
        $arg = new SendingSMSMessageRequest();
        $arg->setMessage("Hello Mum");
        $arg->addNumero("33600000000");
        $arg->addNumero("33600000001");

        $arg->setClasseMsg(SendingSMSMessageRequest::CLASSE_MSG_SMS);
        $arg->setDateEnvoi(new DateTime("2017-09-07 10:00:00"));
        $arg->setRefClient("refClient");
        $arg->setEmetteur("emetteur");
        $arg->setNbrMsg(1);
        $arg->setNotificationUrl("notificationUrl");
        $arg->setNotificationUrlReponse("notificationUrlReponse");
        $arg->setStop(SendingSMSMessageRequest::STOP_ALWAYS);

        $obj = new RequestNormalizer();

        $res = [
            "message"                  => "Hello Mum",
            "numero"                   => "33600000000,33600000001",
            "classe_msg"               => 4,
            "date_envoi"               => "07092017-10:00",
            "refClient"                => "refClient",
            "emetteur"                 => "emetteur",
            "nbr_msg"                  => 1,
            "notification_url"         => "notificationUrl",
            "notification_url_reponse" => "notificationUrlReponse",
            "stop"                     => 2,
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeSendingSMSMessageRequestWithGroupe() {

        // Set a Sending SMS message request mock.
        $arg = new SendingSMSMessageRequest();
        $arg->setMessage("Hello Mum");
        $arg->setGroupe("groupe");

        $arg->setClasseMsg(SendingSMSMessageRequest::CLASSE_MSG_SMS);
        $arg->setDateEnvoi(new DateTime("2017-09-07 10:00:00"));
        $arg->setRefClient("refClient");
        $arg->setEmetteur("emetteur");
        $arg->setNbrMsg(1);
        $arg->setNotificationUrl("notificationUrl");
        $arg->setNotificationUrlReponse("notificationUrlReponse");

        $obj = new RequestNormalizer();

        $res = [
            "message"                  => "Hello Mum",
            "groupe"                   => "groupe",
            "classe_msg"               => 4,
            "date_envoi"               => "07092017-10:00",
            "refClient"                => "refClient",
            "emetteur"                 => "emetteur",
            "nbr_msg"                  => 1,
            "notification_url"         => "notificationUrl",
            "notification_url_reponse" => "notificationUrlReponse",
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     */
    public function testNormalizeSendingSMSMessageRequestWithoutArguments() {

        // Set a Sending SMS message request mock.
        $arg = new SendingSMSMessageRequest();

        $obj = new RequestNormalizer();

        try {

            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"message\" is missing", $ex->getMessage());
        }

        try {

            $arg->setMessage("message");
            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"numero\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeSendingTextToSpeechRequest() {

        // Set a Sending text-to-speech request mock.
        $arg = new SendingTextToSpeechSMSRequest();
        $arg->setMessage("Hello Mum");
        $arg->addNumero("33600000000");
        $arg->addNumero("33600000001");

        $arg->setTitle("title");
        $arg->setDateEnvoi(new DateTime("2019-01-17"));
        $arg->setLanguage("fr-FR");

        $obj = new RequestNormalizer();

        $res = [
            "message"    => "Hello Mum",
            "numero"     => "33600000000,33600000001",
            "title"      => "title",
            "date_envoi" => "17012019",
            "language"   => "fr-FR",
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     */
    public function testNormalizeSendingTextToSpeechRequestWithoutArguments() {

        // Set a Sending text-to-speech request mock.
        $arg = new SendingTextToSpeechSMSRequest();

        $obj = new RequestNormalizer();

        try {

            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"message\" is missing", $ex->getMessage());
        }

        try {

            $arg->setMessage("message");
            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"numero\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeSendingUnicodeSMSRequest() {

        // Set a Sending Unicode SMS request mock.
        $arg = new SendingUnicodeSMSRequest();
        $arg->setMessage("☺");
        $arg->addNumero("33600000000");
        $arg->addNumero("33600000001");

        $arg->setClasseMsg(SendingUnicodeSMSRequest::CLASSE_MSG_SMS);
        $arg->setDateEnvoi(new DateTime("2019-02-02 11:00:00"));
        $arg->setRefClient("refClient");
        $arg->setEmetteur("emetteur");
        $arg->setNbrMsg(1);
        $arg->setNotificationUrl("notificationUrl");
        $arg->setNotificationUrlReponse("notificationUrlReponse");
        $arg->setStop(SendingSMSMessageRequest::STOP_ALWAYS);

        $obj = new RequestNormalizer();

        $res = [
            "message"                  => "☺",
            "numero"                   => "33600000000,33600000001",
            "classe_msg"               => 4,
            "date_envoi"               => "02022019-11:00",
            "refClient"                => "refClient",
            "emetteur"                 => "emetteur",
            "nbr_msg"                  => 1,
            "notification_url"         => "notificationUrl",
            "notification_url_reponse" => "notificationUrlReponse",
            "stop"                     => 2,
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeSentSMSMessageRequest() {

        // Set a Deleting sub-account request mock.
        $arg = new SentSMSMessageListRequest();
        $arg->setOffset(10);

        $obj = new RequestNormalizer();

        $res = [
            "offset" => 10,
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Tests the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeSentSMSMessageRequestWithoutArguments() {

        // Set a Deleting sub-account request mock.
        $arg = new SentSMSMessageListRequest();

        $obj = new RequestNormalizer();

        $res = [];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Test the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeTransferringCreditsRequest() {

        // Set a Transferring credits request mock.
        $arg = new TransferringCreditsRequest();
        $arg->setTargetPseudo("targetPseudo");
        $arg->setCreditAmount(212);

        $arg->setReference("reference");

        $obj = new RequestNormalizer();

        $res = [
            "targetPseudo" => "targetPseudo",
            "creditAmount" => 212,
            "reference"    => "reference",
        ];
        $this->assertEquals($res, $obj->normalize($arg));
    }

    /**
     * Test the normalize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testNormalizeTransferringCreditsRequestWithoutArguments() {

        // Set a Transferring credits request mock.
        $arg = new TransferringCreditsRequest();

        $obj = new RequestNormalizer();

        try {

            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"targetPseudo\" is missing", $ex->getMessage());
        }

        try {

            $arg->setTargetPseudo("targetPseudo");
            $obj->normalize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"creditAmount\" is missing", $ex->getMessage());
        }
    }
}
