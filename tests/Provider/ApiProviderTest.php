<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Provider;

use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Throwable;
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
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
use WBW\Library\SmsMode\Response\AccountBalanceResponse;
use WBW\Library\SmsMode\Response\AddingContactResponse;
use WBW\Library\SmsMode\Response\CheckingSmsMessageStatusResponse;
use WBW\Library\SmsMode\Response\CreatingSubAccountResponse;
use WBW\Library\SmsMode\Response\DeletingSmsResponse;
use WBW\Library\SmsMode\Response\DeletingSubAccountResponse;
use WBW\Library\SmsMode\Response\DeliveryReportResponse;
use WBW\Library\SmsMode\Response\RetrievingSmsReplyResponse;
use WBW\Library\SmsMode\Response\SendingSmsBatchResponse;
use WBW\Library\SmsMode\Response\SendingSmsMessageResponse;
use WBW\Library\SmsMode\Response\SendingTextToSpeechSmsResponse;
use WBW\Library\SmsMode\Response\SendingUnicodeSmsResponse;
use WBW\Library\SmsMode\Response\SentSmsMessageListResponse;
use WBW\Library\SmsMode\Response\TransferringCreditsResponse;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Provider
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
     * Test accountBalance()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
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
     * Test addingContact()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
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
     * Test checkingSmsMessageStatus()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCheckingSmsMessageStatus(): void {

        // Set a Checking SMS message status request mock.
        $arg = new CheckingSmsMessageStatusRequest();
        $arg->setSmsID("smsID");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->checkingSmsMessageStatus($arg);
        $this->assertInstanceOf(CheckingSmsMessageStatusResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Test creatingAPIKey()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCreatingApiKey(): void {

        // Set a Creating API key request mock.
        $arg = new CreatingApiKeyRequest();

        $obj = new ApiProvider($this->authentication);

        $res = $obj->creatingApiKey($arg);

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
     * Test creatingAPIKey()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testCreatingApiKeyWithInvalidArgumentException(): void {

        // Set a Creating API key request mock.
        $arg = new CreatingApiKeyRequest();

        $obj = new ApiProvider(new Authentication());

        try {

            $obj->creatingApiKey($arg);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "pseudo" is missing', $ex->getMessage());
        }
    }

    /**
     * Test creatingSubAccount()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
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
     * Test deletingSms()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testDeletingSms(): void {

        // Set a Deleting SMS request mock.
        $arg = new DeletingSmsRequest();
        $arg->setSmsID("smsID");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->deletingSms($arg);
        $this->assertInstanceOf(DeletingSmsResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Test deletingSubAccount()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
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
     * Test deliveryReport()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
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
     * Test retrievingSmsReply()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRetrievingSmsReply(): void {

        // Set a Retrieving SMS reply request mock.
        $arg = new RetrievingSmsReplyRequest();

        $obj = new ApiProvider($this->authentication);

        $res = $obj->retrievingSmsReply($arg);
        $this->assertInstanceOf(RetrievingSmsReplyResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Test sendingSmsBatch()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSendingSmsBatch(): void {

        // Set a Sending SMS message batch mock.
        $arg = new SendingSmsBatchRequest();
        $arg->setFichier($this->fichier);

        $obj = new ApiProvider($this->authentication);

        $res = $obj->sendingSmsBatch($arg);
        $this->assertInstanceOf(SendingSmsBatchResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Test sendingSmsMessage()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSendingSmsMessage(): void {

        // Set a Sending SMS message request mock.
        $arg = new SendingSmsMessageRequest();
        $arg->setMessage("message");
        $arg->addNumero("33600000000");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->sendingSmsMessage($arg);
        $this->assertInstanceOf(SendingSmsMessageResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Test sendingTextToSpeechSms()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSendingTextToSpeechSms(): void {

        // Set a Sending text-to-speech SMS request mock.
        $arg = new SendingTextToSpeechSmsRequest();
        $arg->setMessage("message");
        $arg->addNumero("33600000000");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->sendingTextToSpeechSms($arg);
        $this->assertInstanceOf(SendingTextToSpeechSmsResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Test sendingUnicodeSms()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSendingUnicodeSms(): void {

        // Set a Sending unicode SMS request mock.
        $arg = new SendingUnicodeSmsRequest();
        $arg->setMessage("message");
        $arg->addNumero("33600000000");

        $obj = new ApiProvider($this->authentication);

        $res = $obj->sendingUnicodeSms($arg);
        $this->assertInstanceOf(SendingUnicodeSmsResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Test sentSmsMessageList()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSentSmsMessageList(): void {

        // Set a Sent SMS message list request mock.
        $arg = new SentSmsMessageListRequest();

        $obj = new ApiProvider($this->authentication);

        $res = $obj->sentSmsMessageList($arg);
        $this->assertInstanceOf(SentSmsMessageListResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Test transferringCredits()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
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
