<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Factory;

use WBW\Library\SmsMode\API\SendingSmsBatchInterface;
use WBW\Library\SmsMode\API\SendingSmsMessageInterface;
use WBW\Library\SmsMode\API\SendingTextToSpeechSmsInterface;
use WBW\Library\SmsMode\Factory\RequestFactory;
use WBW\Library\SmsMode\Request\AccountBalanceRequest;
use WBW\Library\SmsMode\Request\AddingContactRequest;
use WBW\Library\SmsMode\Request\CheckingSmsMessageStatusRequest;
use WBW\Library\SmsMode\Request\CreatingApiKeyRequest;
use WBW\Library\SmsMode\Request\CreatingSubAccountRequest;
use WBW\Library\SmsMode\Request\DeletingSmsRequest;
use WBW\Library\SmsMode\Request\DeletingSubAccountRequest;
use WBW\Library\SmsMode\Request\DeliveryReportRequest;
use WBW\Library\SmsMode\Request\RetrievingSmsReplyRequest;
use WBW\Library\SmsMode\Request\SendingSmsBatchRequest;
use WBW\Library\SmsMode\Request\SendingSmsMessageRequest;
use WBW\Library\SmsMode\Request\SendingTextToSpeechSmsRequest;
use WBW\Library\SmsMode\Request\SendingUnicodeSmsRequest;
use WBW\Library\SmsMode\Request\SentSmsMessageListRequest;
use WBW\Library\SmsMode\Request\TransferringCreditsRequest;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Request factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Factory
 */
class RequestFactoryTest extends AbstractTestCase {

    /**
     * Tests newAccountBalanceRequest()
     *
     * @return void
     */
    public function testNewAccountBalanceRequest(): void {

        $res = RequestFactory::newAccountBalanceRequest();
        $this->assertInstanceOf(AccountBalanceRequest::class, $res);
    }

    /**
     * Tests newAddingContactRequest()
     *
     * @return void
     */
    public function testNewAddingContactRequest(): void {

        $res = RequestFactory::newAddingContactRequest($this->addingContact);
        $this->assertInstanceOf(AddingContactRequest::class, $res);

        $this->assertEquals("2019-02-05 18:00:00", $res->getDate()->format("Y-m-d H:i:s"));
        $this->assertEquals(["groupe1", "groupe2"], $res->getGroupes());
        $this->assertEquals("33600000000", $res->getMobile());
        $this->assertEquals("nom", $res->getNom());
        $this->assertEquals("other", $res->getOther());
        $this->assertEquals("societe", $res->getSociete());
    }

    /**
     * Tests newCheckingSmsMessageStatusRequest()
     *
     * @return void
     */
    public function testNewCheckingSmsMessageStatusRequest(): void {

        $res = RequestFactory::newCheckingSmsMessageStatusRequest($this->checkingSmsMessageStatus);
        $this->assertInstanceOf(CheckingSmsMessageStatusRequest::class, $res);

        $this->assertEquals("smsID", $res->getSmsID());
    }

    /**
     * Tests newCreatingAPIKeyRequest()
     *
     * @return void
     */
    public function testNewCreatingAPIKeyRequest(): void {

        $res = RequestFactory::newCreatingAPIKeyRequest();
        $this->assertInstanceOf(CreatingApiKeyRequest::class, $res);
    }

    /**
     * Tests newCreatingSubAccountRequest()
     *
     * @return void
     */
    public function testNewCreatingSubAccountRequest(): void {

        $res = RequestFactory::newCreatingSubAccountRequest($this->creatingSubAccount);
        $this->assertInstanceOf(CreatingSubAccountRequest::class, $res);

        $this->assertEquals("adresse", $res->getAdresse());
        $this->assertEquals("codePostal", $res->getCodePostal());
        $this->assertEquals("2019-02-05 18:00:00", $res->getDate()->format("Y-m-d H:i:s"));
        $this->assertEquals("email", $res->getEmail());
        $this->assertEquals("33100000000", $res->getFax());
        $this->assertEquals("33600000000", $res->getMobile());
        $this->assertEquals("newPseudo", $res->getNewPseudo());
        $this->assertEquals("newPass", $res->getNewPass());
        $this->assertEquals("nom", $res->getNom());
        $this->assertEquals("prenom", $res->getPrenom());
        $this->assertEquals("reference", $res->getReference());
        $this->assertEquals("societe", $res->getSociete());
        $this->assertEquals("33100000000", $res->getTelephone());
        $this->assertEquals("ville", $res->getVille());
    }

    /**
     * Tests newDeletingSmsRequest()
     *
     * @return void
     */
    public function testNewDeletingSmsRequest(): void {

        $res = RequestFactory::newDeletingSmsRequest($this->deletingSms);
        $this->assertInstanceOf(DeletingSmsRequest::class, $res);

        $this->assertEquals("33600000000", $res->getNumero());
        $this->assertEquals("smsID", $res->getSmsID());
    }

    /**
     * Tests newDeletingSubAccountRequest()
     *
     * @return void
     */
    public function testNewDeletingSubAccountRequest(): void {

        $res = RequestFactory::newDeletingSubAccountRequest($this->deletingSubAccount);
        $this->assertInstanceOf(DeletingSubAccountRequest::class, $res);

        $this->assertEquals("pseudoToDelete", $res->getPseudoToDelete());
    }

    /**
     * Tests newDeliveryReportRequest()
     *
     * @return void
     */
    public function testNewDeliveryReportRequest(): void {

        $res = RequestFactory::newDeliveryReportRequest($this->deliveryReport);
        $this->assertInstanceOf(DeliveryReportRequest::class, $res);

        $this->assertEquals("smsID", $res->getSmsID());
    }

    /**
     * Tests newRetrievingSmsReplyRequest()
     *
     * @return void
     */
    public function testNewRetrievingSmsReplyRequest(): void {

        $res = RequestFactory::newRetrievingSmsReplyRequest($this->retrievingSmsReply);
        $this->assertInstanceOf(RetrievingSmsReplyRequest::class, $res);

        $this->assertEquals("2019-02-05 19:00:00", $res->getEndDate()->format("Y-m-d H:i:s"));
        $this->assertEquals(10, $res->getOffset());
        $this->assertEquals(0, $res->getStart());
        $this->assertEquals("2019-02-05 18:00:00", $res->getStartDate()->format("Y-m-d H:i:s"));
    }

    /**
     * Tests newSendingSmsBatchRequest()
     *
     * @return void
     */
    public function testNewSendingSmsBatchRequest(): void {

        $res = RequestFactory::newSendingSmsBatchRequest($this->sendingSmsBatch);
        $this->assertInstanceOf(SendingSmsBatchRequest::class, $res);

        $this->assertEquals(SendingSmsBatchInterface::CLASSE_MSG_SMS, $res->getClasseMsg());
        $this->assertEquals("2019-02-05 18:00:00", $res->getDateEnvoi()->format("Y-m-d H:i:s"));
        $this->assertEquals("emetteur", $res->getEmetteur());
        $this->assertEquals($this->fichier, $res->getFichier());
        $this->assertEquals("refClient", $res->getRefClient());
        $this->assertEquals(1, $res->getNbrMsg());
        $this->assertEquals("notificationUrl", $res->getNotificationUrl());
    }

    /**
     * Tests newSendingSmsMessageRequest()
     *
     * @return void
     */
    public function testNewSendingSmsMessageRequest(): void {

        $res = RequestFactory::newSendingSmsMessageRequest($this->sendingSmsMessage);
        $this->assertInstanceOf(SendingSmsMessageRequest::class, $res);

        $this->assertEquals(SendingSmsBatchInterface::CLASSE_MSG_SMS, $res->getClasseMsg());
        $this->assertEquals("2019-02-05 18:00:00", $res->getDateEnvoi()->format("Y-m-d H:i:s"));
        $this->assertEquals("emetteur", $res->getEmetteur());
        $this->assertEquals("groupe", $res->getGroupe());
        $this->assertEquals("message", $res->getMessage());
        $this->assertEquals(1, $res->getNbrMsg());
        $this->assertEquals("notificationUrl", $res->getNotificationUrl());
        $this->assertEquals("notificationUrlReponse", $res->getNotificationUrlReponse());
        $this->assertEquals(["33600000000"], $res->getNumero());
        $this->assertEquals("refClient", $res->getRefClient());
        $this->assertEquals(SendingSmsMessageInterface::STOP_ALWAYS, $res->getStop());
    }

    /**
     * Tests newSendingTextToSpeechSmsRequest()
     *
     * @return void
     */
    public function testNewSendingTextToSpeechSmsRequest(): void {

        $res = RequestFactory::newSendingTextToSpeechSmsRequest($this->sendingTextToSpeechSms);
        $this->assertInstanceOf(SendingTextToSpeechSmsRequest::class, $res);

        $this->assertEquals("2019-02-05 18:00:00", $res->getDateEnvoi()->format("Y-m-d H:i:s"));
        $this->assertEquals("message", $res->getMessage());
        $this->assertEquals(["33600000000"], $res->getNumero());
        $this->assertEquals(SendingTextToSpeechSmsInterface::LANGUAGE_FR, $res->getLanguage());
        $this->assertEquals("title", $res->getTitle());
    }

    /**
     * Tests newSendingUnicodeSmsRequest()
     *
     * @return void
     */
    public function testNewSendingUnicodeSmsRequest(): void {

        $res = RequestFactory::newSendingUnicodeSmsRequest($this->sendingUnicodeSms);
        $this->assertInstanceOf(SendingUnicodeSmsRequest::class, $res);

        $this->assertEquals(SendingSmsBatchInterface::CLASSE_MSG_SMS, $res->getClasseMsg());
        $this->assertEquals("2019-02-05 18:00:00", $res->getDateEnvoi()->format("Y-m-d H:i:s"));
        $this->assertEquals("emetteur", $res->getEmetteur());
        $this->assertEquals("groupe", $res->getGroupe());
        $this->assertEquals("message", $res->getMessage());
        $this->assertEquals(1, $res->getNbrMsg());
        $this->assertEquals("notificationUrl", $res->getNotificationUrl());
        $this->assertEquals("notificationUrlReponse", $res->getNotificationUrlReponse());
        $this->assertEquals(["33600000000"], $res->getNumero());
        $this->assertEquals("refClient", $res->getRefClient());
        $this->assertEquals(SendingSmsMessageInterface::STOP_ALWAYS, $res->getStop());
    }

    /**
     * Tests newSentSmsMessageListRequest()
     *
     * @return void
     */
    public function testNewSentSmsMessageListRequest(): void {

        $res = RequestFactory::newSentSmsMessageListRequest($this->sentSmsMessageList);
        $this->assertInstanceOf(SentSmsMessageListRequest::class, $res);

        $this->assertEquals(10, $res->getOffset());
    }

    /**
     * Tests newTransferringCreditsRequest()
     *
     * @return void
     */
    public function testNewTransferringCreditsRequest(): void {

        $res = RequestFactory::newTransferringCreditsRequest($this->transferringCredits);
        $this->assertInstanceOf(TransferringCreditsRequest::class, $res);

        $this->assertEquals(212, $res->getCreditAmount());
        $this->assertEquals("reference", $res->getReference());
        $this->assertEquals("targetPseudo", $res->getTargetPseudo());
    }
}
