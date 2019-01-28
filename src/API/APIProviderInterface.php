<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API;

/**
 * API provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API
 */
interface APIProviderInterface {

    /**
     * Account balance resource path.
     *
     * @var string
     */
    const ACCOUNT_BALANCE_RESOURCE_PATH = "/http/1.6/credit.do";

    /**
     * Adding contact resource path.
     *
     * @var string
     */
    const ADDING_CONTACT_RESOURCE_PATH = "/http/1.6/addContact.do";

    /**
     * Checking SMS message status resource path.
     *
     * @var string
     */
    const CHECKING_SMS_MESSAGE_STATUS_RESOURCE_PATH = "/http/1.6/smsStatus.do";

    /**
     * Creating API key resource path.
     *
     * @var string
     */
    const CREATING_API_KEY_RESOURCE_PATH = "/http/2.0/createAuthorisation.do";

    /**
     * Creating sub-account resource path.
     *
     * @avr string
     */
    const CREATING_SUB_ACCOUNT_RESOURCE_PATH = "/http/1.6/createSubAccount.do";

    /**
     * Deleting SMS resource path.
     *
     * @var string
     */
    const DELETING_SMS_RESOURCE_PATH = "/http/1.6/deleteSMS.do";

    /**
     * Deleting sub-account resource path.
     *
     * @var string
     */
    const DELETING_SUB_ACCOUNT_RESOURCE_PATH = "/http/1.6/deleteSubAccount.do";

    /**
     * Delivery report resource path.
     *
     * @var string
     */
    const DELIVERY_REPORT_RESOURCE_PATH = "/http/1.6/compteRendu.do";

    /**
     * Endpoint path.
     *
     * @var string
     */
    const ENDPOINT_PATH = "https://api.smsmode.com";

    /**
     * Retrieving SMS reply resource path.
     *
     * @var string
     */
    const RETRIEVING_SMS_REPLY_RESOURCE_PATH = "/http/1.6/responseList.do";

    /**
     * Sending SMS message resource path.
     *
     * @var string
     */
    const SENDING_SMS_MESSAGE_RESOURCE_PATH = "/http/1.6/sendSMS.do";

    /**
     * Sending text-to-speech SMS request.
     *
     * @var string
     */
    const SENDING_TEXT_TO_SPEECH_SMS_RESOURCE_PATH = "/http/1.6/sendVoiceMessage.do";

    /**
     * Sent SMS message list resource path.
     *
     * @var string
     */
    const SENT_SMS_MESSAGE_LIST_RESOURCE_PATH = "/http/1.6/smsList.do";

    /**
     * Transferring credits resource path.
     *
     * @var string
     */
    const TRANSFERRING_CREDITS_RESOURCE_PATH = "/http/1.6/creditTransfert.do";
}
