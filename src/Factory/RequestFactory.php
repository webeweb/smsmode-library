<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Factory;

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

/**
 * Request factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Factory
 */
class RequestFactory {

    /**
     * Create an account balance request.
     *
     * @return AccountBalanceRequest Returns the account balance request.
     */
    public static function newAccountBalanceRequest(): AccountBalanceRequest {
        return new AccountBalanceRequest();
    }

    /**
     * Create an adding contact request.
     *
     * @param AddingContactInterface $addingContact The adding contact.
     * @return AddingContactRequest Returns the adding contact request.
     */
    public static function newAddingContactRequest(AddingContactInterface $addingContact): AddingContactRequest {

        $model = new AddingContactRequest();
        $model->setDate($addingContact->getSmsModeDate());
        $model->setGroupes($addingContact->getSmsModeGroupes());
        $model->setMobile($addingContact->getSmsModeMobile());
        $model->setNom($addingContact->getSmsModeNom());
        $model->setOther($addingContact->getSmsModeOther());
        $model->setPrenom($addingContact->getSmsModePrenom());
        $model->setSociete($addingContact->getSmsModeSociete());

        return $model;
    }

    /**
     * Create a checking SMS message status request.
     *
     * @param CheckingSmsMessageStatusInterface $checkingSmsMessageStatus The checking SMS message status.
     * @return CheckingSmsMessageStatusRequest Returns the checking SMS message status request.
     */
    public static function newCheckingSmsMessageStatusRequest(CheckingSmsMessageStatusInterface $checkingSmsMessageStatus): CheckingSmsMessageStatusRequest {

        $model = new CheckingSmsMessageStatusRequest();
        $model->setSmsID($checkingSmsMessageStatus->getSmsModeSmsID());

        return $model;
    }

    /**
     * Create an creating API key request.
     *
     * @return CreatingApiKeyRequest Returns the creating API key request.
     */
    public static function newCreatingApiKeyRequest(): CreatingApiKeyRequest {
        return new CreatingApiKeyRequest();
    }

    /**
     * Create a creating sub-account request.
     *
     * @param CreatingSubAccountInterface $creatingSubAccount The creating sub-account.
     * @return CreatingSubAccountRequest Returns the creating sub-account request.
     */
    public static function newCreatingSubAccountRequest(CreatingSubAccountInterface $creatingSubAccount): CreatingSubAccountRequest {

        $model = new CreatingSubAccountRequest();
        $model->setAdresse($creatingSubAccount->getSmsModeAdresse());
        $model->setCodePostal($creatingSubAccount->getSmsModeCodePostal());
        $model->setDate($creatingSubAccount->getSmsModeDate());
        $model->setEmail($creatingSubAccount->getSmsModeEmail());
        $model->setFax($creatingSubAccount->getSmsModeFax());
        $model->setMobile($creatingSubAccount->getSmsModeMobile());
        $model->setNewPass($creatingSubAccount->getSmsModeNewPass());
        $model->setNewPseudo($creatingSubAccount->getSmsModeNewPseudo());
        $model->setNom($creatingSubAccount->getSmsModeNom());
        $model->setPrenom($creatingSubAccount->getSmsModePrenom());
        $model->setReference($creatingSubAccount->getSmsModeReference());
        $model->setSociete($creatingSubAccount->getSmsModeSociete());
        $model->setTelephone($creatingSubAccount->getSmsModeTelephone());
        $model->setVille($creatingSubAccount->getSmsModeVille());

        return $model;
    }

    /**
     * Create a deleting SMS request.
     *
     * @param DeletingSmsInterface $deletingSms The deleting SMS.
     * @return DeletingSmsRequest Returns the deleting SMS request.
     */
    public static function newDeletingSmsRequest(DeletingSmsInterface $deletingSms): DeletingSmsRequest {

        $model = new DeletingSmsRequest();
        $model->setNumero($deletingSms->getSmsModeNumero());
        $model->setSmsID($deletingSms->getSmsModeSmsID());

        return $model;
    }

    /**
     * Create a deleting sub-account request.
     *
     * @param DeletingSubAccountInterface $deletingSubAccount The deleting sub-account.
     * @return DeletingSubAccountRequest Returns the deleting sub-account status request.
     */
    public static function newDeletingSubAccountRequest(DeletingSubAccountInterface $deletingSubAccount): DeletingSubAccountRequest {

        $model = new DeletingSubAccountRequest();
        $model->setPseudoToDelete($deletingSubAccount->getSmsModePseudoToDelete());

        return $model;
    }

    /**
     * Create a delivery report request.
     *
     * @param DeliveryReportInterface $deliveryReport The delivery report.
     * @return DeliveryReportRequest Returns the delivery report request.
     */
    public static function newDeliveryReportRequest(DeliveryReportInterface $deliveryReport): DeliveryReportRequest {

        $model = new DeliveryReportRequest();
        $model->setSmsID($deliveryReport->getSmsModeSmsID());

        return $model;
    }

    /**
     * Create a retrieving SMS reply request.
     *
     * @param RetrievingSmsReplyInterface $retrievingSmsReply The retrieving SMS reply.
     * @return RetrievingSmsReplyRequest Returns the retrieving SMS reply request.
     */
    public static function newRetrievingSmsReplyRequest(RetrievingSmsReplyInterface $retrievingSmsReply): RetrievingSmsReplyRequest {

        $model = new RetrievingSmsReplyRequest();
        $model->setOffset($retrievingSmsReply->getSmsModeOffset());
        $model->setEndDate($retrievingSmsReply->getSmsModeEndDate());
        $model->setStart($retrievingSmsReply->getSmsModeStart());
        $model->setStartDate($retrievingSmsReply->getSmsModeStartDate());

        return $model;
    }

    /**
     * Create a sending SMS batch request.
     *
     * @param SendingSmsBatchInterface $sendingSmsBatch The sending SMS batch.
     * @return SendingSmsBatchRequest Returns the sending SMS batch request.
     */
    public static function newSendingSmsBatchRequest(SendingSmsBatchInterface $sendingSmsBatch): SendingSmsBatchRequest {

        $model = new SendingSmsBatchRequest();
        $model->setClasseMsg($sendingSmsBatch->getSmsModeClasseMsg());
        $model->setDateEnvoi($sendingSmsBatch->getSmsModeDateEnvoi());
        $model->setEmetteur($sendingSmsBatch->getSmsModeEmetteur());
        $model->setFichier($sendingSmsBatch->getSmsModeFichier());
        $model->setNbrMsg($sendingSmsBatch->getSmsModeNbrMsg());
        $model->setNotificationUrl($sendingSmsBatch->getSmsModeNotificationUrl());
        $model->setRefClient($sendingSmsBatch->getSmsModeRefClient());

        return $model;
    }

    /**
     * Create a sending SMS message request.
     *
     * @param SendingSmsMessageInterface $sendingSmsMessage The sending SMS message.
     * @return SendingSmsMessageRequest Returns the sending SMS message request.
     */
    public static function newSendingSmsMessageRequest(SendingSmsMessageInterface $sendingSmsMessage): SendingSmsMessageRequest {

        $model = new SendingSmsMessageRequest();
        $model->setClasseMsg($sendingSmsMessage->getSmsModeClasseMsg());
        $model->setDateEnvoi($sendingSmsMessage->getSmsModeDateEnvoi());
        $model->setEmetteur($sendingSmsMessage->getSmsModeEmetteur());
        $model->setGroupe($sendingSmsMessage->getSmsModeGroupe());
        $model->setMessage($sendingSmsMessage->getSmsModeMessage());
        foreach ($sendingSmsMessage->getSmsModeNumero() as $current) {
            $model->addNumero($current);
        }
        $model->setNbrMsg($sendingSmsMessage->getSmsModeNbrMsg());
        $model->setNotificationUrl($sendingSmsMessage->getSmsModeNotificationUrl());
        $model->setNotificationUrlReponse($sendingSmsMessage->getSmsModeNotificationUrlReponse());
        $model->setRefClient($sendingSmsMessage->getSmsModeRefClient());
        $model->setStop($sendingSmsMessage->getSmsModeStop());

        return $model;
    }

    /**
     * Create a sending text-to-speech SMS request.
     *
     * @param SendingTextToSpeechSmsInterface $sendingTextToSpeechSms The sending text-to-speech SMS.
     * @return SendingTextToSpeechSmsRequest Returns the sending text-to-speech SMS request.
     */
    public static function newSendingTextToSpeechSmsRequest(SendingTextToSpeechSmsInterface $sendingTextToSpeechSms): SendingTextToSpeechSmsRequest {

        $model = new SendingTextToSpeechSmsRequest();
        $model->setDateEnvoi($sendingTextToSpeechSms->getSmsModeDateEnvoi());
        $model->setLanguage($sendingTextToSpeechSms->getSmsModeLanguage());
        $model->setMessage($sendingTextToSpeechSms->getSmsModeMessage());
        foreach ($sendingTextToSpeechSms->getSmsModeNumero() as $current) {
            $model->addNumero($current);
        }
        $model->setTitle($sendingTextToSpeechSms->getSmsModeTitle());

        return $model;
    }

    /**
     * Create a sending unicode SMS request.
     *
     * @param SendingUnicodeSmsInterface $sendingUnicodeSms The sending unicode SMS.
     * @return SendingUnicodeSmsRequest Returns the sending unicode SMS request.
     */
    public static function newSendingUnicodeSmsRequest(SendingUnicodeSmsInterface $sendingUnicodeSms): SendingUnicodeSmsRequest {

        $model = new SendingUnicodeSmsRequest();
        $model->setClasseMsg($sendingUnicodeSms->getSmsModeClasseMsg());
        $model->setDateEnvoi($sendingUnicodeSms->getSmsModeDateEnvoi());
        $model->setEmetteur($sendingUnicodeSms->getSmsModeEmetteur());
        $model->setGroupe($sendingUnicodeSms->getSmsModeGroupe());
        $model->setMessage($sendingUnicodeSms->getSmsModeMessage());
        foreach ($sendingUnicodeSms->getSmsModeNumero() as $current) {
            $model->addNumero($current);
        }
        $model->setNbrMsg($sendingUnicodeSms->getSmsModeNbrMsg());
        $model->setNotificationUrl($sendingUnicodeSms->getSmsModeNotificationUrl());
        $model->setNotificationUrlReponse($sendingUnicodeSms->getSmsModeNotificationUrlReponse());
        $model->setRefClient($sendingUnicodeSms->getSmsModeRefClient());
        $model->setStop($sendingUnicodeSms->getSmsModeStop());

        return $model;
    }

    /**
     * Create a sent SMS message list request.
     *
     * @param SentSmsMessageListInterface $sentSmsMessageList The sent SMS message list.
     * @return SentSmsMessageListRequest Returns the sent SMS message list request.
     */
    public static function newSentSmsMessageListRequest(SentSmsMessageListInterface $sentSmsMessageList): SentSmsMessageListRequest {

        $model = new SentSmsMessageListRequest();
        $model->setOffset($sentSmsMessageList->getSmsModeOffset());

        return $model;
    }

    /**
     * Create a transferring credits request.
     *
     * @param TransferringCreditsInterface $transferringCredits The transferring credits.
     * @return TransferringCreditsRequest Returns the transferring credits request.
     */
    public static function newTransferringCreditsRequest(TransferringCreditsInterface $transferringCredits): TransferringCreditsRequest {

        $model = new TransferringCreditsRequest();
        $model->setCreditAmount($transferringCredits->getSmsModeCreditAmount());
        $model->setReference($transferringCredits->getSmsModeReference());
        $model->setTargetPseudo($transferringCredits->getSmsModeTargetPseudo());

        return $model;
    }
}
