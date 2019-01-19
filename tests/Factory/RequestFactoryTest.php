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
use WBW\Library\SMSMode\Factory\RequestFactory;
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
    public function testNewAccountBalanceRequest() {

        $obj = RequestFactory::newAccountBalanceRequest();
        $this->assertInstanceOf(AccountBalanceRequestInterface::class, $obj);
    }

    /**
     * Tests the newAddingContactRequest() method.
     *
     * @return void
     */
    public function testNewAddingContactRequest() {

        $obj = RequestFactory::newAddingContactRequest();
        $this->assertInstanceOf(AddingContactRequestInterface::class, $obj);
    }

    /**
     * Tests the newAuthenticationRequest() method.
     *
     * @return void
     */
    public function testNewAuthenticationRequest() {

        $obj = RequestFactory::newAuthenticationRequest();
        $this->assertInstanceOf(AuthenticationRequestInterface::class, $obj);
    }

    /**
     * Tests the newCheckingSMSMessageStatusRequest() method.
     *
     * @return void
     */
    public function testNewCheckingSMSMessageStatusRequest() {

        $obj = RequestFactory::newCheckingSMSMessageStatusRequest();
        $this->assertInstanceOf(CheckingSMSMessageStatusRequestInterface::class, $obj);
    }

    /**
     * Tests the newCreatingSubAccountRequest() method.
     *
     * @return void
     */
    public function testNewCreatingSubAccountRequest() {

        $obj = RequestFactory::newCreatingSubAccountRequest();
        $this->assertInstanceOf(CreatingSubAccountRequestInterface::class, $obj);
    }

    /**
     * Tests the newDeletingSMSRequest() method.
     *
     * @return void
     */
    public function testNewDeletingSMSRequest() {

        $obj = RequestFactory::newDeletingSMSRequest();
        $this->assertInstanceOf(DeletingSMSRequestInterface::class, $obj);
    }

    /**
     * Tests the newDeletingSubAccountRequest() method.
     *
     * @return void
     */
    public function testNewDeletingSubAccountRequest() {

        $obj = RequestFactory::newDeletingSubAccountRequest();
        $this->assertInstanceOf(DeletingSubAccountRequestInterface::class, $obj);
    }

    /**
     * Tests the newDeliveryReportRequest() method.
     *
     * @return void
     */
    public function testNewDeliveryReportRequest() {

        $obj = RequestFactory::newDeliveryReportRequest();
        $this->assertInstanceOf(DeliveryReportRequestInterface::class, $obj);
    }

    /**
     * Tests the newRetrievingSMSReplyRequest() method.
     *
     * @return void
     */
    public function testNewRetrievingSMSReplyRequest() {

        $obj = RequestFactory::newRetrievingSMSReplyRequest();
        $this->assertInstanceOf(RetrievingSMSReplyRequestInterface::class, $obj);
    }

    /**
     * Tests the newSendingSMSMessageRequest() method.
     *
     * @return void
     */
    public function testNewSendingSMSMessageRequest() {

        $obj = RequestFactory::newSendingSMSMessageRequest();
        $this->assertInstanceOf(SendingSMSMessageRequestInterface::class, $obj);
    }

    /**
     * Tests the newSendingTextToSpeechSMSRequest() method.
     *
     * @return void
     */
    public function testNewSendingTextToSpeechSMSRequest() {

        $obj = RequestFactory::newSendingTextToSpeechSMSRequest();
        $this->assertInstanceOf(SendingTextToSpeechSMSRequestInterface::class, $obj);
    }

    /**
     * Tests the newSentSMSMessageListRequest() method.
     *
     * @return void
     */
    public function testNewSentSMSMessageListRequest() {

        $obj = RequestFactory::newSentSMSMessageListRequest();
        $this->assertInstanceOf(SentSMSMessageListRequestInterface::class, $obj);
    }

    /**
     * Tests the newTransferringCreditsRequest() method.
     *
     * @return void
     */
    public function testNewTransferringCreditsRequest() {

        $obj = RequestFactory::newTransferringCreditsRequest();
        $this->assertInstanceOf(TransferringCreditsRequestInterface::class, $obj);
    }
}
