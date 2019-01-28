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

use WBW\Library\SMSMode\API\APIProviderInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * API provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\API
 */
class APIProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("https://api.smsmode.com", APIProviderInterface::ENDPOINT_PATH);

        $this->assertEquals("/http/1.6/credit.do", APIProviderInterface::ACCOUNT_BALANCE_RESOURCE_PATH);
        $this->assertEquals("/http/1.6/addContact.do", APIProviderInterface::ADDING_CONTACT_RESOURCE_PATH);
        $this->assertEquals("/http/1.6/smsStatus.do", APIProviderInterface::CHECKING_SMS_MESSAGE_STATUS_RESOURCE_PATH);
        $this->assertEquals("/http/2.0/createAuthorisation.do", APIProviderInterface::CREATING_API_KEY_RESOURCE_PATH);
        $this->assertEquals("/http/1.6/createSubAccount.do", APIProviderInterface::CREATING_SUB_ACCOUNT_RESOURCE_PATH);
        $this->assertEquals("/http/1.6/deleteSMS.do", APIProviderInterface::DELETING_SMS_RESOURCE_PATH);
        $this->assertEquals("/http/1.6/deleteSubAccount.do", APIProviderInterface::DELETING_SUB_ACCOUNT_RESOURCE_PATH);
        $this->assertEquals("/http/1.6/compteRendu.do", APIProviderInterface::DELIVERY_REPORT_RESOURCE_PATH);
        $this->assertEquals("/http/1.6/responseList.do", APIProviderInterface::RETRIEVING_SMS_REPLY_RESOURCE_PATH);
        $this->assertEquals("/http/1.6/sendSMS.do", APIProviderInterface::SENDING_SMS_MESSAGE_RESOURCE_PATH);
        $this->assertEquals("/http/1.6/sendVoiceMessage.do", APIProviderInterface::SENDING_TEXT_TO_SPEECH_SMS_RESOURCE_PATH);
        $this->assertEquals("/http/1.6/sendSMS.do", APIProviderInterface::SENDING_SMS_MESSAGE_RESOURCE_PATH);
        $this->assertEquals("/http/1.6/creditTransfert.do", APIProviderInterface::TRANSFERRING_CREDITS_RESOURCE_PATH);
    }
}
