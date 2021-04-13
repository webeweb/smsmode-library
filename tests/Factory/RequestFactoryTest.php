<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Factory;

use WBW\Library\SMSMode\Factory\RequestFactory;
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
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Request factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Factory
 */
class RequestFactoryTest extends AbstractTestCase {

    /**
     * Tests the newAccountBalanceRequest() method.
     *
     * @return void
     */
    public function testNewAccountBalanceRequest(): void {

        $res = RequestFactory::newAccountBalanceRequest();
        $this->assertInstanceOf(AccountBalanceRequest::class, $res);
    }

    /**
     * Tests the newAddingContactRequest() method.
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
     * Tests the newCheckingSMSMessageStatusRequest() method.
     *
     * @return void
     */
    public function testNewCheckingSMSMessageStatusRequest(): void {

        $res = RequestFactory::newCheckingSMSMessageStatusRequest($this->checkingSMSMessageStatus);
        $this->assertInstanceOf(CheckingSMSMessageStatusRequest::class, $res);

        $this->assertEquals("smsID", $res->getSmsID());
    }

    /**
     * Tests the newCreatingAPIKeyRequest() method.
     *
     * @return void
     */
    public function testNewCreatingAPIKeyRequest(): void {

        $res = RequestFactory::newCreatingAPIKeyRequest();
        $this->assertInstanceOf(CreatingAPIKeyRequest::class, $res);
    }

    /**
     * Tests the newCreatingSubAccountRequest() method.
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
     * Tests the newDeletingSMSRequest() method.
     *
     * @return void
     */
    public function testNewDeletingSMSRequest(): void {

        $res = RequestFactory::newDeletingSMSRequest($this->deletingSMS);
        $this->assertInstanceOf(DeletingSMSRequest::class, $res);

        $this->assertEquals("33600000000", $res->getNumero());
        $this->assertEquals("smsID", $res->getSmsID());
    }

    /**
     * Tests the newDeletingSubAccountRequest() method.
     *
     * @return void
     */
    public function testNewDeletingSubAccountRequest(): void {

        $res = RequestFactory::newDeletingSubAccountRequest($this->deletingSubAccount);
        $this->assertInstanceOf(DeletingSubAccountRequest::class, $res);

        $this->assertEquals("pseudoToDelete", $res->getPseudoToDelete());
    }

    /**
     * Tests the newDeliveryReportRequest() method.
     *
     * @return void
     */
    public function testNewDeliveryReportRequest(): void {

        $res = RequestFactory::newDeliveryReportRequest($this->deliveryReport);
        $this->assertInstanceOf(DeliveryReportRequest::class, $res);

        $this->assertEquals("smsID", $res->getSmsID());
    }

    /**
     * Tests the newRetrievingSMSReplyRequest() method.
     *
     * @return void
     */
    public function testNewRetrievingSMSReplyRequest(): void {

        $res = RequestFactory::newRetrievingSMSReplyRequest($this->retrievingSMSReply);
        $this->assertInstanceOf(RetrievingSMSReplyRequest::class, $res);

        $this->assertEquals("2019-02-05 19:00:00", $res->getEndDate()->format("Y-m-d H:i:s"));
        $this->assertEquals(10, $res->getOffset());
        $this->assertEquals(0, $res->getStart());
        $this->assertEquals("2019-02-05 18:00:00", $res->getStartDate()->format("Y-m-d H:i:s"));
    }

    /**
     * Tests the newSendingSMSBatchRequest() method.
     *
     * @return void
     */
    public function testNewSendingSMSBatchRequest(): void {

        $res = RequestFactory::newSendingSMSBatchRequest($this->sendingSMSBatch);
        $this->assertInstanceOf(SendingSMSBatchRequest::class, $res);

        $this->assertEquals(SendingSMSBatchRequest::CLASSE_MSG_SMS, $res->getClasseMsg());
        $this->assertEquals("2019-02-05 18:00:00", $res->getDateEnvoi()->format("Y-m-d H:i:s"));
        $this->assertEquals("emetteur", $res->getEmetteur());
        $this->assertEquals($this->fichier, $res->getFichier());
        $this->assertEquals("refClient", $res->getRefClient());
        $this->assertEquals(1, $res->getNbrMsg());
        $this->assertEquals("notificationUrl", $res->getNotificationUrl());
    }

    /**
     * Tests the newSendingSMSMessageRequest() method.
     *
     * @return void
     */
    public function testNewSendingSMSMessageRequest(): void {

        $res = RequestFactory::newSendingSMSMessageRequest($this->sendingSMSMessage);
        $this->assertInstanceOf(SendingSMSMessageRequest::class, $res);

        $this->assertEquals(SendingSMSMessageRequest::CLASSE_MSG_SMS, $res->getClasseMsg());
        $this->assertEquals("2019-02-05 18:00:00", $res->getDateEnvoi()->format("Y-m-d H:i:s"));
        $this->assertEquals("emetteur", $res->getEmetteur());
        $this->assertEquals("groupe", $res->getGroupe());
        $this->assertEquals("message", $res->getMessage());
        $this->assertEquals(1, $res->getNbrMsg());
        $this->assertEquals("notificationUrl", $res->getNotificationUrl());
        $this->assertEquals("notificationUrlReponse", $res->getNotificationUrlReponse());
        $this->assertEquals(["33600000000"], $res->getNumero());
        $this->assertEquals("refClient", $res->getRefClient());
        $this->assertEquals(SendingSMSMessageRequest::STOP_ALWAYS, $res->getStop());
    }

    /**
     * Tests the newSendingTextToSpeechSMSRequest() method.
     *
     * @return void
     */
    public function testNewSendingTextToSpeechSMSRequest(): void {

        $res = RequestFactory::newSendingTextToSpeechSMSRequest($this->sendingTextToSpeechSMS);
        $this->assertInstanceOf(SendingTextToSpeechSMSRequest::class, $res);

        $this->assertEquals("2019-02-05 18:00:00", $res->getDateEnvoi()->format("Y-m-d H:i:s"));
        $this->assertEquals("message", $res->getMessage());
        $this->assertEquals(["33600000000"], $res->getNumero());
        $this->assertEquals(SendingTextToSpeechSMSRequest::LANGUAGE_FR, $res->getLanguage());
        $this->assertEquals("title", $res->getTitle());
    }

    /**
     * Tests the newSendingUnicodeSMSRequest() method.
     *
     * @return void
     */
    public function testNewSendingUnicodeSMSRequest(): void {

        $res = RequestFactory::newSendingUnicodeSMSRequest($this->sendingUnicodeSMS);
        $this->assertInstanceOf(SendingUnicodeSMSRequest::class, $res);

        $this->assertEquals(SendingUnicodeSMSRequest::CLASSE_MSG_SMS, $res->getClasseMsg());
        $this->assertEquals("2019-02-05 18:00:00", $res->getDateEnvoi()->format("Y-m-d H:i:s"));
        $this->assertEquals("emetteur", $res->getEmetteur());
        $this->assertEquals("groupe", $res->getGroupe());
        $this->assertEquals("message", $res->getMessage());
        $this->assertEquals(1, $res->getNbrMsg());
        $this->assertEquals("notificationUrl", $res->getNotificationUrl());
        $this->assertEquals("notificationUrlReponse", $res->getNotificationUrlReponse());
        $this->assertEquals(["33600000000"], $res->getNumero());
        $this->assertEquals("refClient", $res->getRefClient());
        $this->assertEquals(SendingUnicodeSMSRequest::STOP_ALWAYS, $res->getStop());
    }

    /**
     * Tests the newSentSMSMessageListRequest() method.
     *
     * @return void
     */
    public function testNewSentSMSMessageListRequest(): void {

        $res = RequestFactory::newSentSMSMessageListRequest($this->sentSMSMessageList);
        $this->assertInstanceOf(SentSMSMessageListRequest::class, $res);

        $this->assertEquals(10, $res->getOffset());
    }

    /**
     * Tests the newTransferringCreditsRequest() method.
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
