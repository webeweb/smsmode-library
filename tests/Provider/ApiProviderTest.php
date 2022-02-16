<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Provider;

use Exception;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use WBW\Library\SMSMode\Model\Authentication;
use WBW\Library\SMSMode\Provider\ApiProvider;
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
use WBW\Library\SMSMode\Response\AccountBalanceResponse;
use WBW\Library\SMSMode\Response\AddingContactResponse;
use WBW\Library\SMSMode\Response\CheckingSMSMessageStatusResponse;
use WBW\Library\SMSMode\Response\CreatingSubAccountResponse;
use WBW\Library\SMSMode\Response\DeletingSMSResponse;
use WBW\Library\SMSMode\Response\DeletingSubAccountResponse;
use WBW\Library\SMSMode\Response\DeliveryReportResponse;
use WBW\Library\SMSMode\Response\RetrievingSMSReplyResponse;
use WBW\Library\SMSMode\Response\SendingSMSBatchResponse;
use WBW\Library\SMSMode\Response\SendingSMSMessageResponse;
use WBW\Library\SMSMode\Response\SendingTextToSpeechSMSResponse;
use WBW\Library\SMSMode\Response\SendingUnicodeSMSResponse;
use WBW\Library\SMSMode\Response\SentSMSMessageListResponse;
use WBW\Library\SMSMode\Response\TransferringCreditsResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Provider
 */
class ApiProviderTest extends AbstractTestCase {

    /**
     * Authentication.
     *
     * @var Authentication
     */
    private $authentication;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set an Authentication mock.
        $this->authentication = new Authentication();
        $this->authentication->setPseudo("pseudo");
        $this->authentication->setPass("pass");
    }

    /**
     Tests accountBalance()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAccountBalance(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        // Set an Account balance request mock.
        $arg = new AccountBalanceRequest();

        $obj = new ApiProvider($this->authentication, $logger);

        $res = $obj->accountBalance($arg);
        $this->assertInstanceOf(AccountBalanceResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests addingContact()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddingContact(): void {

        // Set an Adding contact request mock.
        $arg = new AddingContactRequest();

        $arg->setNom("nom");
        $arg->setMobile("33600000000");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->addingContact($arg);
        $this->assertInstanceOf(AddingContactResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests checkingSMSMessageStatus()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCheckingSMSMessageStatus(): void {

        // Set a Checking SMS message status request mock.
        $arg = new CheckingSMSMessageStatusRequest();
        $arg->setSmsID("smsID");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->checkingSMSMessageStatus($arg);
        $this->assertInstanceOf(CheckingSMSMessageStatusResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests creatingAPIKey()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCreatingAPIKey(): void {

        // Set a Creating API key request mock.
        $arg = new CreatingAPIKeyRequest();

        $obj = new ApiProvider($this->authentication);

        $res = $obj->creatingAPIKey($arg);

        $this->assertNull($res->getCode());
        $this->assertNull($res->getDescription());

        $this->assertNull($res->getAccessToken());
        $this->assertNull($res->getAccount());
        $this->assertNull($res->getCreationDate());
        $this->assertNull($res->getExpiration());
        $this->assertNull($res->getId());
        $this->assertNull($res->getState());

        $this->assertNotEquals([], $res->getException());
    }

    /**
     Tests creatingAPIKey()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCreatingAPIKeyWithInvalidArgumentException(): void {

        // Set a Creating API key request mock.
        $arg = new CreatingAPIKeyRequest();

        $obj = new ApiProvider(new Authentication());

        try {

            $obj->creatingAPIKey($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "pseudo" is missing', $ex->getMessage());
        }
    }

    /**
     Tests creatingSubAccount()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCreatingSubAccount(): void {

        // Set a Creating sub-account request mock.
        $arg = new CreatingSubAccountRequest();
        $arg->setNewPseudo("newPseudo");
        $arg->setNewPass("newPass");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->creatingSubAccount($arg);
        $this->assertInstanceOf(CreatingSubAccountResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests deletingSMS()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDeletingSMS(): void {

        // Set a Deleting SMS request mock.
        $arg = new DeletingSMSRequest();
        $arg->setSmsID("smsID");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->deletingSMS($arg);
        $this->assertInstanceOf(DeletingSMSResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests deletingSubAccount()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDeletingSubAccount(): void {

        // Set a Deleting sub-account request mock.
        $arg = new DeletingSubAccountRequest();
        $arg->setPseudoToDelete("pseudoToDelete");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->deletingSubAccount($arg);
        $this->assertInstanceOf(DeletingSubAccountResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests deliveryReport()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDeliveryReport(): void {

        // Set a Delivery report request mock.
        $arg = new DeliveryReportRequest();
        $arg->setSmsID("smsID");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->deliveryReport($arg);
        $this->assertInstanceOf(DeliveryReportResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests retrievingSMSReply()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRetrievingSMSReply(): void {

        // Set a Retrieving SMS reply request mock.
        $arg = new RetrievingSMSReplyRequest();

        $obj = new ApiProvider($this->authentication);

        $res = $obj->retrievingSMSReply($arg);
        $this->assertInstanceOf(RetrievingSMSReplyResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests sendingSMSBatch()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSendingSMSBatch(): void {

        // Set a Sending SMS message batch mock.
        $arg = new SendingSMSBatchRequest();
        $arg->setFichier($this->fichier);

        $obj = new ApiProvider($this->authentication);

        $res = $obj->sendingSMSBatch($arg);
        $this->assertInstanceOf(SendingSMSBatchResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests sendingSMSMessage()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSendingSMSMessage(): void {

        // Set a Sending SMS message request mock.
        $arg = new SendingSMSMessageRequest();
        $arg->setMessage("message");
        $arg->addNumero("33600000000");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->sendingSMSMessage($arg);
        $this->assertInstanceOf(SendingSMSMessageResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests sendingTextToSpeechSMS()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSendingTextToSpeechSMS(): void {

        // Set a Sending text-to-speech SMS request mock.
        $arg = new SendingTextToSpeechSMSRequest();
        $arg->setMessage("message");
        $arg->addNumero("33600000000");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->sendingTextToSpeechSMS($arg);
        $this->assertInstanceOf(SendingTextToSpeechSMSResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests sendingUnicodeSMS()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSendingUnicodeSMS(): void {

        // Set a Sending unicode SMS request mock.
        $arg = new SendingUnicodeSMSRequest();
        $arg->setMessage("message");
        $arg->addNumero("33600000000");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->sendingUnicodeSMS($arg);
        $this->assertInstanceOf(SendingUnicodeSMSResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests sentSMSMessageList()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSentSMSMessageList(): void {

        // Set a Sent SMS message list request mock.
        $arg = new SentSMSMessageListRequest();

        $obj = new ApiProvider($this->authentication);

        $res = $obj->sentSMSMessageList($arg);
        $this->assertInstanceOf(SentSMSMessageListResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     Tests transferringCredits()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testTransferringCredits(): void {

        // Set a Transferring credits request mock.
        $arg = new TransferringCreditsRequest();
        $arg->setCreditAmount(212);
        $arg->setTargetPseudo("targetPseudo");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->transferringCredits($arg);
        $this->assertInstanceOf(TransferringCreditsResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }
}
