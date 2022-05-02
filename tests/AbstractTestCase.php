<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests;

use DateTime;
use PHPUnit\Framework\TestCase;
use WBW\Library\SmsMode\Api\SendingSmsBatchInterface as ApiSendingSmsBatchInterface;
use WBW\Library\SmsMode\Api\SendingSmsMessageInterface as ApiSendingSmsMessageInterface;
use WBW\Library\SmsMode\Api\SendingTextToSpeechSmsInterface as ApiSendingTextToSpeechSmsInterface;
use WBW\Library\SmsMode\Entity\AddingContactInterface;
use WBW\Library\SmsMode\Entity\CheckingSmsMessageStatusInterface;
use WBW\Library\SmsMode\Entity\CreatingSubAccountInterface;
use WBW\Library\SmsMode\Entity\DeletingSmsInterface;
use WBW\Library\SmsMode\Entity\DeletingSubAccountInterface;
use WBW\Library\SmsMode\Entity\DeliveryReportInterface;
use WBW\Library\SmsMode\Entity\RetrievingSmsReplyInterface;
use WBW\Library\SmsMode\Entity\SendingSmsBatchInterface;
use WBW\Library\SmsMode\Entity\SendingSmsMessageInterface;
use WBW\Library\SmsMode\Entity\SendingTextToSpeechSmsInterface;
use WBW\Library\SmsMode\Entity\SendingUnicodeSmsInterface;
use WBW\Library\SmsMode\Entity\SentSmsMessageListInterface;
use WBW\Library\SmsMode\Entity\TransferringCreditsInterface;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests
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
     * @var CheckingSmsMessageStatusInterface
     */
    protected $checkingSmsMessageStatus;

    /**
     * Creating sub-account.
     *
     * @var CreatingSubAccountInterface
     */
    protected $creatingSubAccount;

    /**
     * Deleting SMS.
     *
     * @var DeletingSmsInterface
     */
    protected $deletingSms;

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
     * @var RetrievingSmsReplyInterface
     */
    protected $retrievingSmsReply;

    /**
     * Sending SMS batch.
     *
     * @var SendingSmsBatchInterface
     */
    protected $sendingSmsBatch;

    /**
     * Sending SMS message.
     *
     * @var SendingSmsMessageInterface
     */
    protected $sendingSmsMessage;

    /**
     * Sending text-to-speech SMS.
     *
     * @var SendingTextToSpeechSmsInterface
     */
    protected $sendingTextToSpeechSms;

    /**
     * Sending unicode SMS.
     *
     * @var SendingUnicodeSmsInterface
     */
    protected $sendingUnicodeSms;

    /**
     * Sent SMS message list.
     *
     * @var SentSmsMessageListInterface
     */
    protected $sentSmsMessageList;

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
        $this->fichier = realpath(__DIR__ . "/Fixtures/Request/SendingSmsBatchRequest.csv");

        // Set an Adding contact mock.
        $this->addingContact = $this->getMockBuilder(AddingContactInterface::class)->getMock();
        $this->addingContact->expects($this->any())->method("getSmsModeDate")->willReturn(new DateTime("2019-02-05 18:00:00"));
        $this->addingContact->expects($this->any())->method("getSmsModeGroupes")->willReturn(["groupe1", "groupe2"]);
        $this->addingContact->expects($this->any())->method("getSmsModeMobile")->willReturn("33600000000");
        $this->addingContact->expects($this->any())->method("getSmsModeNom")->willReturn("nom");
        $this->addingContact->expects($this->any())->method("getSmsModeOther")->willReturn("other");
        $this->addingContact->expects($this->any())->method("getSmsModePrenom")->willReturn("prenom");
        $this->addingContact->expects($this->any())->method("getSmsModeSociete")->willReturn("societe");

        // Set a Checking SMS message status mock.
        $this->checkingSmsMessageStatus = $this->getMockBuilder(CheckingSmsMessageStatusInterface::class)->getMock();
        $this->checkingSmsMessageStatus->expects($this->any())->method("getSmsModeSmsID")->willReturn("smsID");

        // Set a Creating sub-account mock.
        $this->creatingSubAccount = $this->getMockBuilder(CreatingSubAccountInterface::class)->getMock();
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeAdresse")->willReturn("adresse");
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeCodePostal")->willReturn("codePostal");
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeDate")->willReturn(new DateTime("2019-02-05 18:00:00"));
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeEmail")->willReturn("email");
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeFax")->willReturn("33100000000");
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeMobile")->willReturn("33600000000");
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeNewPseudo")->willReturn("newPseudo");
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeNewPass")->willReturn("newPass");
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeNom")->willReturn("nom");
        $this->creatingSubAccount->expects($this->any())->method("getSmsModePrenom")->willReturn("prenom");
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeReference")->willReturn("reference");
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeSociete")->willReturn("societe");
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeTelephone")->willReturn("33100000000");
        $this->creatingSubAccount->expects($this->any())->method("getSmsModeVille")->willReturn("ville");

        // Set a Deleting SMS mock.
        $this->deletingSms = $this->getMockBuilder(DeletingSmsInterface::class)->getMock();
        $this->deletingSms->expects($this->any())->method("getSmsModeNumero")->willReturn("33600000000");
        $this->deletingSms->expects($this->any())->method("getSmsModeSmsID")->willReturn("smsID");

        // Set a Deleting sub-account mock.
        $this->deletingSubAccount = $this->getMockBuilder(DeletingSubAccountInterface::class)->getMock();
        $this->deletingSubAccount->expects($this->any())->method("getSmsModePseudoToDelete")->willReturn("pseudoToDelete");

        // Set a Delivery report mock.
        $this->deliveryReport = $this->getMockBuilder(DeliveryReportInterface::class)->getMock();
        $this->deliveryReport->expects($this->any())->method("getSmsModeSmsID")->willReturn("smsID");

        // Set a Retrieving SMS reply mock.
        $this->retrievingSmsReply = $this->getMockBuilder(RetrievingSmsReplyInterface::class)->getMock();
        $this->retrievingSmsReply->expects($this->any())->method("getSmsModeEndDate")->willReturn(new DateTime("2019-02-05 19:00:00"));
        $this->retrievingSmsReply->expects($this->any())->method("getSmsModeOffset")->willReturn(10);
        $this->retrievingSmsReply->expects($this->any())->method("getSmsModeStart")->willReturn(0);
        $this->retrievingSmsReply->expects($this->any())->method("getSmsModeStartDate")->willReturn(new DateTime("2019-02-05 18:00:00"));

        // Set a Sending SMS batch mock.
        $this->sendingSmsBatch = $this->getMockBuilder(SendingSmsBatchInterface::class)->getMock();
        $this->sendingSmsBatch->expects($this->any())->method("getSmsModeClasseMsg")->willReturn(ApiSendingSmsBatchInterface::CLASSE_MSG_SMS);
        $this->sendingSmsBatch->expects($this->any())->method("getSmsModeDateEnvoi")->willReturn(new DateTime("2019-02-05 18:00:00"));
        $this->sendingSmsBatch->expects($this->any())->method("getSmsModeEmetteur")->willReturn("emetteur");
        $this->sendingSmsBatch->expects($this->any())->method("getSmsModeFichier")->willReturn($this->fichier);
        $this->sendingSmsBatch->expects($this->any())->method("getSmsModeNbrMsg")->willReturn(1);
        $this->sendingSmsBatch->expects($this->any())->method("getSmsModeNotificationUrl")->willReturn("notificationUrl");
        $this->sendingSmsBatch->expects($this->any())->method("getSmsModeRefClient")->willReturn("refClient");

        // Set a Sending SMS message mock.
        $this->sendingSmsMessage = $this->getMockBuilder(SendingSmsMessageInterface::class)->getMock();
        $this->sendingSmsMessage->expects($this->any())->method("getSmsModeClasseMsg")->willReturn(ApiSendingSmsBatchInterface::CLASSE_MSG_SMS);
        $this->sendingSmsMessage->expects($this->any())->method("getSmsModeDateEnvoi")->willReturn(new DateTime("2019-02-05 18:00:00"));
        $this->sendingSmsMessage->expects($this->any())->method("getSmsModeEmetteur")->willReturn("emetteur");
        $this->sendingSmsMessage->expects($this->any())->method("getSmsModeGroupe")->willReturn("groupe");
        $this->sendingSmsMessage->expects($this->any())->method("getSmsModeMessage")->willReturn("message");
        $this->sendingSmsMessage->expects($this->any())->method("getSmsModeNbrMsg")->willReturn(1);
        $this->sendingSmsMessage->expects($this->any())->method("getSmsModeNotificationUrl")->willReturn("notificationUrl");
        $this->sendingSmsMessage->expects($this->any())->method("getSmsModeNotificationUrlReponse")->willReturn("notificationUrlReponse");
        $this->sendingSmsMessage->expects($this->any())->method("getSmsModeNumero")->willReturn(["33600000000"]);
        $this->sendingSmsMessage->expects($this->any())->method("getSmsModeRefClient")->willReturn("refClient");
        $this->sendingSmsMessage->expects($this->any())->method("getSmsModeStop")->willReturn(ApiSendingSmsMessageInterface::STOP_ALWAYS);

        // Set a Sending text-to-speech SMS mock.
        $this->sendingTextToSpeechSms = $this->getMockBuilder(SendingTextToSpeechSmsInterface::class)->getMock();
        $this->sendingTextToSpeechSms->expects($this->any())->method("getSmsModeDateEnvoi")->willReturn(new DateTime("2019-02-05 18:00:00"));
        $this->sendingTextToSpeechSms->expects($this->any())->method("getSmsModeMessage")->willReturn("message");
        $this->sendingTextToSpeechSms->expects($this->any())->method("getSmsModeNumero")->willReturn(["33600000000"]);
        $this->sendingTextToSpeechSms->expects($this->any())->method("getSmsModeLanguage")->willReturn(ApiSendingTextToSpeechSmsInterface::LANGUAGE_FR);
        $this->sendingTextToSpeechSms->expects($this->any())->method("getSmsModeTitle")->willReturn("title");

        // Set a Sending unicode SMS mock.
        $this->sendingUnicodeSms = $this->getMockBuilder(SendingUnicodeSmsInterface::class)->getMock();
        $this->sendingUnicodeSms->expects($this->any())->method("getSmsModeClasseMsg")->willReturn(ApiSendingSMSBatchInterface::CLASSE_MSG_SMS);
        $this->sendingUnicodeSms->expects($this->any())->method("getSmsModeDateEnvoi")->willReturn(new DateTime("2019-02-05 18:00:00"));
        $this->sendingUnicodeSms->expects($this->any())->method("getSmsModeEmetteur")->willReturn("emetteur");
        $this->sendingUnicodeSms->expects($this->any())->method("getSmsModeGroupe")->willReturn("groupe");
        $this->sendingUnicodeSms->expects($this->any())->method("getSmsModeMessage")->willReturn("message");
        $this->sendingUnicodeSms->expects($this->any())->method("getSmsModeNbrMsg")->willReturn(1);
        $this->sendingUnicodeSms->expects($this->any())->method("getSmsModeNotificationUrl")->willReturn("notificationUrl");
        $this->sendingUnicodeSms->expects($this->any())->method("getSmsModeNotificationUrlReponse")->willReturn("notificationUrlReponse");
        $this->sendingUnicodeSms->expects($this->any())->method("getSmsModeNumero")->willReturn(["33600000000"]);
        $this->sendingUnicodeSms->expects($this->any())->method("getSmsModeRefClient")->willReturn("refClient");
        $this->sendingUnicodeSms->expects($this->any())->method("getSmsModeStop")->willReturn(ApiSendingSmsMessageInterface::STOP_ALWAYS);

        // Set a Sent SMS message list mock.
        $this->sentSmsMessageList = $this->getMockBuilder(SentSmsMessageListInterface::class)->getMock();
        $this->sentSmsMessageList->expects($this->any())->method("getSmsModeOffset")->willReturn(10);

        // Set a Transferring credits mock.
        $this->transferringCredits = $this->getMockBuilder(TransferringCreditsInterface::class)->getMock();
        $this->transferringCredits->expects($this->any())->method("getSmsModeCreditAmount")->willReturn(212);
        $this->transferringCredits->expects($this->any())->method("getSmsModeReference")->willReturn("reference");
        $this->transferringCredits->expects($this->any())->method("getSmsModeTargetPseudo")->willReturn("targetPseudo");
    }
}
