<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests;

use DateTime;
use PHPUnit\Framework\TestCase;
use WBW\Library\SMSMode\Entity\AddingContactInterface;
use WBW\Library\SMSMode\Entity\CheckingSMSMessageStatusInterface;
use WBW\Library\SMSMode\Entity\CreatingSubAccountInterface;
use WBW\Library\SMSMode\Entity\DeletingSMSInterface;
use WBW\Library\SMSMode\Entity\DeletingSubAccountInterface;
use WBW\Library\SMSMode\Entity\DeliveryReportInterface;
use WBW\Library\SMSMode\Entity\RetrievingSMSReplyInterface;
use WBW\Library\SMSMode\Entity\SendingSMSBatchInterface;
use WBW\Library\SMSMode\Entity\SendingSMSMessageInterface;
use WBW\Library\SMSMode\Entity\SendingTextToSpeechSMSInterface;
use WBW\Library\SMSMode\Entity\SendingUnicodeSMSInterface;
use WBW\Library\SMSMode\Entity\SentSMSMessageListInterface;
use WBW\Library\SMSMode\Entity\TransferringCreditsInterface;
use WBW\Library\SMSMode\Request\SendingSMSBatchRequest;
use WBW\Library\SMSMode\Request\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Request\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Request\SendingUnicodeSMSRequest;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests
 * @abstract
 */
abstract class AbstractTestCase extends TestCase {

    /**
     * Adding contact.
     *
     * @var AddingContactInterface
     */
    protected $addingContact;

    /**
     * Checking SMS message status.
     *
     * @var CheckingSMSMessageStatusInterface
     */
    protected $checkingSMSMessageStatus;

    /**
     * Creating sub-account.
     *
     * @var CreatingSubAccountInterface
     */
    protected $creatingSubAccount;

    /**
     * Deleting SMS.
     *
     * @var DeletingSMSInterface
     */
    protected $deletingSMS;

    /**
     * Deleting sub-account.
     *
     * @var DeletingSubAccountInterface
     */
    protected $deletingSubAccount;

    /**
     * Delivery report.
     *
     * @var DeliveryReportInterface
     */
    protected $deliveryReport;

    /**
     * Fichier.
     *
     * @var string
     */
    protected $fichier;

    /**
     * Retrieving SMS reply.
     *
     * @var RetrievingSMSReplyInterface
     */
    protected $retrievingSMSReply;

    /**
     * Sending SMS batch.
     *
     * @var SendingSMSBatchInterface
     */
    protected $sendingSMSBatch;

    /**
     * Sending SMS message.
     *
     * @var SendingSMSMessageInterface
     */
    protected $sendingSMSMessage;

    /**
     * Sending text-to-speech SMS.
     *
     * @var SendingTextToSpeechSMSInterface
     */
    protected $sendingTextToSpeechSMS;

    /**
     * Sending unicode SMS.
     *
     * @var SendingUnicodeSMSInterface
     */
    protected $sendingUnicodeSMS;

    /**
     * Sent SMS message list.
     *
     * @var SentSMSMessageListInterface
     */
    protected $sentSMSMessageList;

    /**
     * Transferring credits.
     *
     * @var TransferringCreditsInterface
     */
    protected $transferringCredits;

    /**
     * {inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Fichier mock.
        $this->fichier = getcwd() . "/tests/Fixtures/Request/SendingSMSBatchRequest.csv";

        // Set an Adding contact mock.
        $this->addingContact = $this->getMockBuilder(AddingContactInterface::class)->getMock();
        $this->addingContact->expects($this->any())->method("getSMSModeDate")->willReturn(new DateTime("2019-02-05 18:00:00"));
        $this->addingContact->expects($this->any())->method("getSMSModeGroupes")->willReturn(["groupe1", "groupe2"]);
        $this->addingContact->expects($this->any())->method("getSMSModeMobile")->willReturn("33600000000");
        $this->addingContact->expects($this->any())->method("getSMSModeNom")->willReturn("nom");
        $this->addingContact->expects($this->any())->method("getSMSModeOther")->willReturn("other");
        $this->addingContact->expects($this->any())->method("getSMSModePrenom")->willReturn("prenom");
        $this->addingContact->expects($this->any())->method("getSMSModeSociete")->willReturn("societe");

        // Set a Checking SMS message status mock.
        $this->checkingSMSMessageStatus = $this->getMockBuilder(CheckingSMSMessageStatusInterface::class)->getMock();
        $this->checkingSMSMessageStatus->expects($this->any())->method("getSMSModeSmsID")->willReturn("smsID");

        // Set a Creating sub-account mock.
        $this->creatingSubAccount = $this->getMockBuilder(CreatingSubAccountInterface::class)->getMock();
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeAdresse")->willReturn("adresse");
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeCodePostal")->willReturn("codePostal");
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeDate")->willReturn(new DateTime("2019-02-05 18:00:00"));
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeEmail")->willReturn("email");
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeFax")->willReturn("33100000000");
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeMobile")->willReturn("33600000000");
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeNewPseudo")->willReturn("newPseudo");
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeNewPass")->willReturn("newPass");
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeNom")->willReturn("nom");
        $this->creatingSubAccount->expects($this->any())->method("getSMSModePrenom")->willReturn("prenom");
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeReference")->willReturn("reference");
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeSociete")->willReturn("societe");
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeTelephone")->willReturn("33100000000");
        $this->creatingSubAccount->expects($this->any())->method("getSMSModeVille")->willReturn("ville");

        // Set a Deleting SMS mock.
        $this->deletingSMS = $this->getMockBuilder(DeletingSMSInterface::class)->getMock();
        $this->deletingSMS->expects($this->any())->method("getSMSModeNumero")->willReturn("33600000000");
        $this->deletingSMS->expects($this->any())->method("getSMSModeSmsID")->willReturn("smsID");

        // Set a Deleting sub-account mock.
        $this->deletingSubAccount = $this->getMockBuilder(DeletingSubAccountInterface::class)->getMock();
        $this->deletingSubAccount->expects($this->any())->method("getSMSModePseudoToDelete")->willReturn("pseudoToDelete");

        // Set a Delivery report mock.
        $this->deliveryReport = $this->getMockBuilder(DeliveryReportInterface::class)->getMock();
        $this->deliveryReport->expects($this->any())->method("getSMSModeSmsID")->willReturn("smsID");

        // Set a Retrieving SMS reply mock.
        $this->retrievingSMSReply = $this->getMockBuilder(RetrievingSMSReplyInterface::class)->getMock();
        $this->retrievingSMSReply->expects($this->any())->method("getSMSModeEndDate")->willReturn(new DateTime("2019-02-05 19:00:00"));
        $this->retrievingSMSReply->expects($this->any())->method("getSMSModeOffset")->willReturn(10);
        $this->retrievingSMSReply->expects($this->any())->method("getSMSModeStart")->willReturn(0);
        $this->retrievingSMSReply->expects($this->any())->method("getSMSModeStartDate")->willReturn(new DateTime("2019-02-05 18:00:00"));

        // Set a Sending SMS batch mock.
        $this->sendingSMSBatch = $this->getMockBuilder(SendingSMSBatchInterface::class)->getMock();
        $this->sendingSMSBatch->expects($this->any())->method("getSMSModeClasseMsg")->willReturn(SendingSMSBatchRequest::CLASSE_MSG_SMS);
        $this->sendingSMSBatch->expects($this->any())->method("getSMSModeDateEnvoi")->willReturn(new DateTime("2019-02-05 18:00:00"));
        $this->sendingSMSBatch->expects($this->any())->method("getSMSModeEmetteur")->willReturn("emetteur");
        $this->sendingSMSBatch->expects($this->any())->method("getSMSModeFichier")->willReturn($this->fichier);
        $this->sendingSMSBatch->expects($this->any())->method("getSMSModeNbrMsg")->willReturn(1);
        $this->sendingSMSBatch->expects($this->any())->method("getSMSModeNotificationUrl")->willReturn("notificationUrl");
        $this->sendingSMSBatch->expects($this->any())->method("getSMSModeRefClient")->willReturn("refClient");

        // Set a Sending SMS message mock.
        $this->sendingSMSMessage = $this->getMockBuilder(SendingSMSMessageInterface::class)->getMock();
        $this->sendingSMSMessage->expects($this->any())->method("getSMSModeClasseMsg")->willReturn(SendingSMSMessageRequest::CLASSE_MSG_SMS);
        $this->sendingSMSMessage->expects($this->any())->method("getSMSModeDateEnvoi")->willReturn(new DateTime("2019-02-05 18:00:00"));
        $this->sendingSMSMessage->expects($this->any())->method("getSMSModeEmetteur")->willReturn("emetteur");
        $this->sendingSMSMessage->expects($this->any())->method("getSMSModeGroupe")->willReturn("groupe");
        $this->sendingSMSMessage->expects($this->any())->method("getSMSModeMessage")->willReturn("message");
        $this->sendingSMSMessage->expects($this->any())->method("getSMSModeNbrMsg")->willReturn(1);
        $this->sendingSMSMessage->expects($this->any())->method("getSMSModeNotificationUrl")->willReturn("notificationUrl");
        $this->sendingSMSMessage->expects($this->any())->method("getSMSModeNotificationUrlReponse")->willReturn("notificationUrlReponse");
        $this->sendingSMSMessage->expects($this->any())->method("getSMSModeNumero")->willReturn(["33600000000"]);
        $this->sendingSMSMessage->expects($this->any())->method("getSMSModeRefClient")->willReturn("refClient");
        $this->sendingSMSMessage->expects($this->any())->method("getSMSModeStop")->willReturn(SendingSMSMessageRequest::STOP_ALWAYS);

        // Set a Sending text-to-speech SMS mock.
        $this->sendingTextToSpeechSMS = $this->getMockBuilder(SendingTextToSpeechSMSInterface::class)->getMock();
        $this->sendingTextToSpeechSMS->expects($this->any())->method("getSMSModeDateEnvoi")->willReturn(new DateTime("2019-02-05 18:00:00"));
        $this->sendingTextToSpeechSMS->expects($this->any())->method("getSMSModeMessage")->willReturn("message");
        $this->sendingTextToSpeechSMS->expects($this->any())->method("getSMSModeNumero")->willReturn(["33600000000"]);
        $this->sendingTextToSpeechSMS->expects($this->any())->method("getSMSModeLanguage")->willReturn(SendingTextToSpeechSMSRequest::LANGUAGE_FR);
        $this->sendingTextToSpeechSMS->expects($this->any())->method("getSMSModeTitle")->willReturn("title");

        // Set a Sending unicode SMS mock.
        $this->sendingUnicodeSMS = $this->getMockBuilder(SendingUnicodeSMSInterface::class)->getMock();
        $this->sendingUnicodeSMS->expects($this->any())->method("getSMSModeClasseMsg")->willReturn(SendingUnicodeSMSRequest::CLASSE_MSG_SMS);
        $this->sendingUnicodeSMS->expects($this->any())->method("getSMSModeDateEnvoi")->willReturn(new DateTime("2019-02-05 18:00:00"));
        $this->sendingUnicodeSMS->expects($this->any())->method("getSMSModeEmetteur")->willReturn("emetteur");
        $this->sendingUnicodeSMS->expects($this->any())->method("getSMSModeGroupe")->willReturn("groupe");
        $this->sendingUnicodeSMS->expects($this->any())->method("getSMSModeMessage")->willReturn("message");
        $this->sendingUnicodeSMS->expects($this->any())->method("getSMSModeNbrMsg")->willReturn(1);
        $this->sendingUnicodeSMS->expects($this->any())->method("getSMSModeNotificationUrl")->willReturn("notificationUrl");
        $this->sendingUnicodeSMS->expects($this->any())->method("getSMSModeNotificationUrlReponse")->willReturn("notificationUrlReponse");
        $this->sendingUnicodeSMS->expects($this->any())->method("getSMSModeNumero")->willReturn(["33600000000"]);
        $this->sendingUnicodeSMS->expects($this->any())->method("getSMSModeRefClient")->willReturn("refClient");
        $this->sendingUnicodeSMS->expects($this->any())->method("getSMSModeStop")->willReturn(SendingSMSMessageRequest::STOP_ALWAYS);

        // Set a Sent SMS message list mock.
        $this->sentSMSMessageList = $this->getMockBuilder(SentSMSMessageListInterface::class)->getMock();
        $this->sentSMSMessageList->expects($this->any())->method("getSMSModeOffset")->willReturn(10);

        // Set a Transferring credits mock.
        $this->transferringCredits = $this->getMockBuilder(TransferringCreditsInterface::class)->getMock();
        $this->transferringCredits->expects($this->any())->method("getSMSModeCreditAmount")->willReturn(212);
        $this->transferringCredits->expects($this->any())->method("getSMSModeReference")->willReturn("reference");
        $this->transferringCredits->expects($this->any())->method("getSMSModeTargetPseudo")->willReturn("targetPseudo");
    }
}
