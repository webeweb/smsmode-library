<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\API;

use WBW\Library\SMSMode\API\ProviderInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\API
 */
class ProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("https://api.smsmode.com/http", ProviderInterface::ENDPOINT_PATH);

        $this->assertEquals("/1.6/credit.do", ProviderInterface::ACCOUNT_BALANCE_RESOURCE_PATH);
        $this->assertEquals("/1.6/addContact.do", ProviderInterface::ADDING_CONTACT_RESOURCE_PATH);
        $this->assertEquals("/2.0/createAuthorisation.do", ProviderInterface::AUTHENTICATION_RESOURCE_PATH);
        $this->assertEquals("/1.6/smsStatus.do", ProviderInterface::CHECKING_SMS_MESSAGE_STATUS_RESOURCE_PATH);
        $this->assertEquals("/1.6/createSubAccount.do", ProviderInterface::CREATING_SUB_ACCOUNT_RESOURCE_PATH);
        $this->assertEquals("/1.6/deleteSMS.do", ProviderInterface::DELETING_SMS_RESOURCE_PATH);
        $this->assertEquals("/1.6/deleteSubAccount.do", ProviderInterface::DELETING_SUB_ACCOUNT_RESOURCE_PATH);
        $this->assertEquals("/1.6/compteRendu.do", ProviderInterface::DELIVERY_REPORT_RESOURCE_PATH);
        $this->assertEquals("/1.6/responseList.do", ProviderInterface::RETRIEVING_SMS_REPLY_RESOURCE_PATH);
        $this->assertEquals("/1.6/sendSMS.do", ProviderInterface::SENDING_SMS_MESSAGE_RESOURCE_PATH);
        $this->assertEquals("/1.6/sendVoiceMessage.do", ProviderInterface::SENDING_TEXT_TO_SPEECH_SMS_RESOURCE_PATH);
        $this->assertEquals("/1.6/sendSMS.do", ProviderInterface::SENDING_SMS_MESSAGE_RESOURCE_PATH);
        $this->assertEquals("/1.6/creditTransfert.do", ProviderInterface::TRANSFERRING_CREDITS_RESOURCE_PATH);
    }
}
