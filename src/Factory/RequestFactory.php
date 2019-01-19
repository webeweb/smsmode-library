<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Factory;

use WBW\Library\SMSMode\API\Request\AccountBalanceRequestInterface;
use WBW\Library\SMSMode\API\Request\AddingContactRequestInterface;
use WBW\Library\SMSMode\API\Request\AuthenticationRequestInterface;
use WBW\Library\SMSMode\API\Request\CheckingSMSMessageStatusRequestInterface;
use WBW\Library\SMSMode\API\Request\CreatingSubAccountRequestInterface;
use WBW\Library\SMSMode\API\Request\DeletingSMSRequestInterface;
use WBW\Library\SMSMode\API\Request\DeletingSubAccountRequestInterface;
use WBW\Library\SMSMode\API\Request\DeliveryReportRequestInterface;
use WBW\Library\SMSMode\API\Request\RetrievingSMSReplyRequestInterface;
use WBW\Library\SMSMode\API\Request\SendingSMSMessageRequestInterface;
use WBW\Library\SMSMode\API\Request\SendingTextToSpeechSMSRequestInterface;
use WBW\Library\SMSMode\API\Request\SentSMSMessageListRequestInterface;
use WBW\Library\SMSMode\API\Request\TransferringCreditsRequestInterface;
use WBW\Library\SMSMode\Request\AccountBalanceRequest;
use WBW\Library\SMSMode\Request\AddingContactRequest;
use WBW\Library\SMSMode\Request\AuthenticationRequest;
use WBW\Library\SMSMode\Request\CheckingSMSMessageStatusRequest;
use WBW\Library\SMSMode\Request\CreatingSubAccountRequest;
use WBW\Library\SMSMode\Request\DeletingSMSRequest;
use WBW\Library\SMSMode\Request\DeletingSubAccountRequest;
use WBW\Library\SMSMode\Request\DeliveryReportRequest;
use WBW\Library\SMSMode\Request\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Request\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Request\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Request\SentSMSMessageListRequest;
use WBW\Library\SMSMode\Request\TransferringCreditsRequest;

/**
 * Request factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Factory
 */
class RequestFactory {

    /**
     * Creates an account balance request.
     *
     * @return AccountBalanceRequestInterface Returns a AccountBalanceRequest.
     */
    public static function newAccountBalanceRequest() {
        return new AccountBalanceRequest();
    }

    /**
     * Creates an adding contact request.
     *
     * @return AddingContactRequestInterface Returns an adding contact request.
     */
    public static function newAddingContactRequest() {
        return new AddingContactRequest();
    }

    /**
     * Creates a authentication request.
     *
     * @return AuthenticationRequestInterface Returns a authentication request.
     */
    public static function newAuthenticationRequest() {
        return new AuthenticationRequest();
    }

    /**
     * Creates a checking SMS message status request.
     *
     * @return CheckingSMSMessageStatusRequestInterface Returns a checking SMS message status request.
     */
    public static function newCheckingSMSMessageStatusRequest() {
        return new CheckingSMSMessageStatusRequest();
    }

    /**
     * Creates a creating sub-account request.
     *
     * @return CreatingSubAccountRequestInterface Returns a creating sub-account request.
     */
    public static function newCreatingSubAccountRequest() {
        return new CreatingSubAccountRequest();
    }

    /**
     * Creates a deleting SMS request.
     *
     * @return DeletingSMSRequestInterface Returns a deleting SMS request.
     */
    public static function newDeletingSMSRequest() {
        return new DeletingSMSRequest();
    }

    /**
     * Creates a deleting sub-account request.
     *
     * @return DeletingSubAccountRequestInterface Returns a deleting sub-account request.
     */
    public static function newDeletingSubAccountRequest() {
        return new DeletingSubAccountRequest();
    }

    /**
     * Creates a delivery report request.
     *
     * @return DeliveryReportRequestInterface Returns a delivery report request.
     */
    public static function newDeliveryReportRequest() {
        return new DeliveryReportRequest();
    }

    /**
     * Creates a retrieving SMS reply request.
     *
     * @return RetrievingSMSReplyRequestInterface Returns a retrieving SMS reply request.
     */
    public static function newRetrievingSMSReplyRequest() {
        return new RetrievingSMSReplyRequest();
    }

    /**
     * Creates a sending SMS message request.
     *
     * @return SendingSMSMessageRequestInterface Returns a sending SMS message request.
     */
    public static function newSendingSMSMessageRequest() {
        return new SendingSMSMessageRequest();
    }

    /**
     * Creates a sending text-to-speech SMS request.
     *
     * @return SendingTextToSpeechSMSRequestInterface Returns a sending text-to-speech SMS request.
     */
    public static function newSendingTextToSpeechSMSRequest() {
        return new SendingTextToSpeechSMSRequest();
    }

    /**
     * Creates a sent SMS message list request.
     *
     * @return SentSMSMessageListRequestInterface Returns a sent SMS message list request.
     */
    public static function newSentSMSMessageListRequest() {
        return new SentSMSMessageListRequest();
    }

    /**
     * Creates a transferring credits request.
     *
     * @return TransferringCreditsRequestInterface Returns a transferring credits request.
     */
    public static function newTransferringCreditsRequest() {
        return new TransferringCreditsRequest();
    }
}
