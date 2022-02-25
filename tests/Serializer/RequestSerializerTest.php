<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Serializer;

use DateTime;
use Exception;
use InvalidArgumentException;
use WBW\Library\SMSMode\Model\Authentication;
use WBW\Library\SMSMode\Request\AccountBalanceRequest;
use WBW\Library\SMSMode\Request\AddingContactRequest;
use WBW\Library\SMSMode\Request\CheckingSMSMessageStatusRequest;
use WBW\Library\SMSMode\Request\CreatingAPIKeyRequest;
use WBW\Library\SMSMode\Request\CreatingSubAccountRequest;
use WBW\Library\SMSMode\Request\DeletingSMSRequest;
use WBW\Library\SMSMode\Request\DeletingSubAccountRequest;
use WBW\Library\SMSMode\Request\DeliveryReportRequest;
use WBW\Library\SMSMode\Request\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Request\SendingSMSBatchRequest;
use WBW\Library\SMSMode\Request\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Request\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Request\SendingUnicodeSMSRequest;
use WBW\Library\SMSMode\Request\SentSMSMessageListRequest;
use WBW\Library\SMSMode\Request\TransferringCreditsRequest;
use WBW\Library\SMSMode\Serializer\RequestSerializer;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Object serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Tests\Serializer
 */
class RequestSerializerTest extends AbstractTestCase {

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeAccountBalance(): void {

        // Set an account balance request mock.
        $arg = new AccountBalanceRequest();

        $obj = new RequestSerializer();

        $res = [];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeAddingContactRequest(): void {

        // Set an Adding contact request mock.
        $arg = new AddingContactRequest();
        $arg->setNom("nom");
        $arg->setMobile("33600000000");

        $arg->setPrenom("prenom");
        $arg->setGroupes(["groupe1", "groupe2"]);
        $arg->setSociete("societe");
        $arg->setOther("other");
        $arg->setDate(new DateTime("2017-09-12 11:00:00"));

        $obj = new RequestSerializer();

        $res = [
            "nom"     => "nom",
            "mobile"  => "33600000000",
            "prenom"  => "prenom",
            "groupes" => "groupe1,groupe2",
            "societe" => "societe",
            "other"   => "other",
            "date"    => "12092017",
        ];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     */
    public function testSerializeAddingContactRequestWithoutArguments(): void {

        // Set an Adding contact request mock.
        $arg = new AddingContactRequest();

        $obj = new RequestSerializer();

        try {

            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "nom" is missing', $ex->getMessage());
        }

        try {

            $arg->setNom("nom");
            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "mobile" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeAuthentication(): void {

        // Set a Creating sub-account request mock.
        $arg = new Authentication();
        $arg->setPseudo("pseudo");
        $arg->setPass("pass");

        $obj = new RequestSerializer();

        $res = [
            "pseudo" => "pseudo",
            "pass"   => "pass",
        ];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeAuthenticationWithToken(): void {

        // Set a Creating sub-account request mock.
        $arg = new Authentication();
        $arg->setAccessToken("accessToken");

        $arg->setPseudo("pseudo");
        $arg->setPass("pass");

        $obj = new RequestSerializer();

        $res = [
            "accessToken" => "accessToken",
        ];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     */
    public function testSerializeAuthenticationWithoutArguments(): void {

        // Set a Authentication mock.
        $arg = new Authentication();

        $obj = new RequestSerializer();

        try {

            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "pseudo" is missing', $ex->getMessage());
        }

        try {

            $arg->setPseudo("pseudo");
            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "pass" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeCheckingSMSMessageStatusRequest(): void {

        // Set a Checking SMS message status mock.
        $arg = new CheckingSMSMessageStatusRequest();
        $arg->setSmsID("smsID");

        $obj = new RequestSerializer();

        $res = [
            "smsID" => "smsID",
        ];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     */
    public function testSerializeCheckingSMSMessageStatusRequestWithoutArguments(): void {

        // Set a Checking SMS message status mock.
        $arg = new CheckingSMSMessageStatusRequest();

        $obj = new RequestSerializer();

        try {

            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "smsID" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeCreatingAPIKeyRequest(): void {

        // Set an Creating API key request mock.
        $arg = new CreatingAPIKeyRequest();

        $obj = new RequestSerializer();

        $res = [];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeCreatingSubAccount(): void {

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

        $obj = new RequestSerializer();

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
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     */
    public function testSerializeCreatingSubAccountWithoutArguments(): void {

        // Set a Creating sub-account request mock.
        $arg = new CreatingSubAccountRequest();

        $obj = new RequestSerializer();

        try {

            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "newPseudo" is missing', $ex->getMessage());
        }

        try {

            $arg->setNewPseudo("newPseudo");
            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "newPass" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeDeletingSMSRequest(): void {

        // Set a Delete SMS request mock.
        $arg = new DeletingSMSRequest();
        $arg->setSmsID("smsID");

        $obj = new RequestSerializer();

        $res1 = [
            "smsID" => "smsID",
        ];
        $this->assertEquals($res1, $obj->serialize($arg));

        $arg->setSmsID(null);
        $arg->setNumero("33600000000");

        $res2 = [
            "numero" => "33600000000",
        ];
        $this->assertEquals($res2, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     */
    public function testSerializeDeletingSMSRequestWithoutArguments(): void {

        // Set a Delete SMS request mock.
        $arg = new DeletingSMSRequest();

        $obj = new RequestSerializer();

        try {

            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "smsID" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeDeletingSubAccountRequest(): void {

        // Set a Deleting sub-account request mock.
        $arg = new DeletingSubAccountRequest();
        $arg->setPseudoToDelete("pseudoToDelete");

        $obj = new RequestSerializer();

        $res = [
            "pseudoToDelete" => "pseudoToDelete",
        ];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     */
    public function testSerializeDeletingSubAccountRequestWithoutArguments(): void {

        // Set a Deleting sub-account request mock.
        $arg = new DeletingSubAccountRequest();

        $obj = new RequestSerializer();

        try {

            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "pseudoToDelete" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeDeliveryReportRequest(): void {

        // Set a Delivery report request mock.
        $arg = new DeliveryReportRequest();
        $arg->setSmsID("smsID");

        $obj = new RequestSerializer();

        $res = [
            "smsID" => "smsID",
        ];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     */
    public function testSerializeDeliveryReportRequestWithoutArguments(): void {

        // Set a Delivery report request mock.
        $arg = new DeliveryReportRequest();

        $obj = new RequestSerializer();

        try {

            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "smsID" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeRetrievingSMSReplyRequest(): void {

        // Set a Retrieving SMS reply request mock.
        $arg = new RetrievingSMSReplyRequest();

        $obj = new RequestSerializer();

        try {

            $arg->setStart(0);
            $arg->setOffset(null);
            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The optional parameter "offset" is required when "start" is provided', $ex->getMessage());
        }

        try {

            $arg->setStart(null);
            $arg->setOffset(1);
            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The optional parameter "start" is required when "offset" is provided', $ex->getMessage());
        }

        $arg->setStart(0);
        $arg->setOffset(10);

        $res = [
            "start"  => 0,
            "offset" => 10,
        ];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeRetrievingSMSReplyRequestWithStartAndEndDate(): void {

        // Set a Retrieving SMS reply request mock.
        $arg = new RetrievingSMSReplyRequest();

        $obj = new RequestSerializer();

        try {

            $arg->setStartDate(new DateTime("2017-09-14 12:00:00"));
            $obj->serialize($arg);
        } catch (Exception $ex) {
            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The optional parameter "endDate" is required when "startDate" is provided', $ex->getMessage());
        }

        try {

            $arg->setStartDate(null);
            $arg->setEndDate(new DateTime("2017-09-14 12:00:00"));
            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The optional parameter "startDate" is required when "endDate" is provided', $ex->getMessage());
        }

        try {

            $arg->setStartDate(new DateTime("2017-09-14 12:00:00"));
            $arg->setEndDate(new DateTime("2017-09-14 12:00:00"));
            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals('The "endDate" must be greater than "startDate"', $ex->getMessage());
        }

        $arg->setStartDate(new DateTime("2017-09-14 12:00:00"));
        $arg->setEndDate(new DateTime("2017-09-14 14:00:00"));

        $res = [
            "startDate" => "14092017-12:00",
            "endDate"   => "14092017-14:00",
        ];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeRetrievingSMSReplyRequestWithoutArguments(): void {

        // Set a Retrieving SMS reply request mock.
        $arg = new RetrievingSMSReplyRequest();

        $obj = new RequestSerializer();

        $res = [];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeSendingSMSBatchRequest(): void {

        // Set a Sending SMS batch request mock.
        $arg = new SendingSMSBatchRequest();

        $arg->setClasseMsg(SendingSMSBatchRequest::CLASSE_MSG_SMS);
        $arg->setDateEnvoi(new DateTime("2019-02-04 18:00:00"));
        $arg->setRefClient("refClient");
        $arg->setEmetteur("emetteur");
        $arg->setFichier($this->fichier);
        $arg->setNbrMsg(1);
        $arg->setNotificationUrl("notificationUrl");

        $obj = new RequestSerializer();

        $res = [
            "classe_msg"       => 4,
            "date_envoi"       => "04022019-18:00",
            "refClient"        => "refClient",
            "emetteur"         => "emetteur",
            "nbr_msg"          => 1,
            "notification_url" => "notificationUrl",
            "fichier"          => $this->fichier,
        ];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     */
    public function testSerializeSendingSMSBatchRequestWithoutArguments(): void {

        // Set a Sending SMS batch request mock.
        $arg = new SendingSMSBatchRequest();

        $obj = new RequestSerializer();

        try {

            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "fichier" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeSendingSMSMessageRequest(): void {

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

        $obj = new RequestSerializer();

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
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeSendingSMSMessageRequestWithGroupe(): void {

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

        $obj = new RequestSerializer();

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
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     */
    public function testSerializeSendingSMSMessageRequestWithoutArguments(): void {

        // Set a Sending SMS message request mock.
        $arg = new SendingSMSMessageRequest();

        $obj = new RequestSerializer();

        try {

            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "message" is missing', $ex->getMessage());
        }

        try {

            $arg->setMessage("message");
            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "numero" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeSendingTextToSpeechRequest(): void {

        // Set a Sending text-to-speech request mock.
        $arg = new SendingTextToSpeechSMSRequest();
        $arg->setMessage("Hello Mum");
        $arg->addNumero("33600000000");
        $arg->addNumero("33600000001");

        $arg->setTitle("title");
        $arg->setDateEnvoi(new DateTime("2019-01-17"));
        $arg->setLanguage("fr-FR");

        $obj = new RequestSerializer();

        $res = [
            "message"    => "Hello Mum",
            "numero"     => "33600000000,33600000001",
            "title"      => "title",
            "date_envoi" => "17012019",
            "language"   => "fr-FR",
        ];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     */
    public function testSerializeSendingTextToSpeechRequestWithoutArguments(): void {

        // Set a Sending text-to-speech request mock.
        $arg = new SendingTextToSpeechSMSRequest();

        $obj = new RequestSerializer();

        try {

            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "message" is missing', $ex->getMessage());
        }

        try {

            $arg->setMessage("message");
            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "numero" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeSendingUnicodeSMSRequest(): void {

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

        $obj = new RequestSerializer();

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
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeSentSMSMessageRequest(): void {

        // Set a Deleting sub-account request mock.
        $arg = new SentSMSMessageListRequest();
        $arg->setOffset(10);

        $obj = new RequestSerializer();

        $res = [
            "offset" => 10,
        ];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Tests serialize()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeSentSMSMessageRequestWithoutArguments(): void {

        // Set a Deleting sub-account request mock.
        $arg = new SentSMSMessageListRequest();

        $obj = new RequestSerializer();

        $res = [];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Test the serialize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeTransferringCreditsRequest(): void {

        // Set a Transferring credits request mock.
        $arg = new TransferringCreditsRequest();
        $arg->setTargetPseudo("targetPseudo");
        $arg->setCreditAmount(212);

        $arg->setReference("reference");

        $obj = new RequestSerializer();

        $res = [
            "targetPseudo" => "targetPseudo",
            "creditAmount" => 212,
            "reference"    => "reference",
        ];
        $this->assertEquals($res, $obj->serialize($arg));
    }

    /**
     * Test the serialize() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeTransferringCreditsRequestWithoutArguments(): void {

        // Set a Transferring credits request mock.
        $arg = new TransferringCreditsRequest();

        $obj = new RequestSerializer();

        try {

            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "targetPseudo" is missing', $ex->getMessage());
        }

        try {

            $arg->setTargetPseudo("targetPseudo");
            $obj->serialize($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "creditAmount" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RequestSerializer();

        $this->assertNotEmpty($obj->getConfiguration());
    }
}
