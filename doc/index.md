DOCUMENTATION
=============

> IMPORTANT NOTICE: The API provider can be used with a debug flag and/or a
> logger with the following code:

```php
use Psr\Log\LoggerInterface;
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;

/** @var LoggerInterface $logger */
// $logger = ...

// Create the API provider.
$provider = new ApiProvider(new Authentication(), $logger);
$provider->setDebug(true);
```

---

1) Authentication

```php
use WBW\Library\SmsMode\Model\Authentication;

// Create an authentication request.
$authentication = new Authentication();

// Set a couple login/password.
$authentication->setPseudo("pseudo");
$authentication->setPass("pass");

// or use an access token.
$authentication->setAccessToken("accessToken");
```

Creating an API key :

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\CreatingApiKeyRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Call the API and get the response.
$response = $provider->creatingApiKey(new CreatingApiKeyRequest());

$response->getException();

// Handle the response.
$response->getCode();
$response->getDescription();

$response->getId();
$response->getAccessToken();
$response->getAccount();
$response->getCreationDate();
$response->getExpiration();
$response->getState();
```

2) Sending SMS message

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\SendingSmsMessageRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending SMS message request.
$request = new SendingSmsMessageRequest();
$request->setMessage("message");
$request->addNumero("33600000001");
$request->addNumero("33600000002");
// ...

// Call the API and get the response.
$response = $provider->sendingSMSMessage($request);

// Handle the response.
$response->getCode();
$response->getDescription();

$response->getSmsID();
```

3) Delivery report

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Model\DeliveryReport;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\DeliveryReportRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Delivery report request.
$request = new DeliveryReportRequest();
$request->setSmsID("smsID");

// Call the API and get the response.
$response = $provider->deliveryReport($request);

// Handle the response.
$response->getCode();
$response->getDescription();

/** @var DeliveryReport $current */
foreach($response->getDeliveryReports() as $current) {
    
    $current->getCode();
    $current->getNumero();
}
```

4) Account balance

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\AccountBalanceRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Call the API and get the response.
$response = $provider->accountBalance(new AccountBalanceRequest());

// Handle the response.
$response->getCode();
$response->getDescription();

$response->getAccountBalance();
```

5) Creating sub-account

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\CreatingSubAccountRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Creating sub-account request.
$request = new CreatingSubAccountRequest();
$request->setNewPseudo("pseudo");
$request->setNewPass("pass");

// Call the API and get the response.
$response = $provider->creatingSubAccount($request);

// Handle the response.
$response->getCode();
$response->getDescription();
```

Deleting sub-account :

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\DeletingSubAccountRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Deleting sub-account request.
$request = new DeletingSubAccountRequest();
$request->setPseudoToDelete("pseudoToDelete");

// Call the API and get the response.
$response = $provider->deletingSubAccount($request);

// Handle the response.
$response->getCode();
$response->getDescription();
```

6) Transferring credits from one account to another

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\TransferringCreditsRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Transferring credits request.
$request = new TransferringCreditsRequest();
$request->setCreditAmount(212);
$request->setTargetPseudo("targetPseudo");

// Call the API and get the response.
$response = $provider->transferringCredits($request);

// Handle the response.
$response->getCode();
$response->getDescription();
```

7) Adding contacts

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\AddingContactRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create an Adding contact request.
$request = new AddingContactRequest();
$request->setNom("lastname");
$request->setMobile("33600000000");

// Call the API and get the response.
$response = $provider->addingContact($request);

// Handle the response.
$response->getCode();
$response->getDescription();
```

8) Deleting SMS

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\DeletingSmsRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Deleting SMS request.
$request = new DeletingSmsRequest();
$request->setSmsID("smsID");

// Call the API and get the response.
$response = $provider->deletingSMS($request);

// Handle the response.
$response->getCode();
$response->getDescription();
```

9) Sent SMS message list

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Model\SentSmsMessage;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\SentSmsMessageListRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Call the API and get the response.
$response = $provider->sentSMSMessageList(new SentSmsMessageListRequest());

// Handle the response.
$response->getCode();
$response->getDescription();

/** @var SentSmsMessage $current */
foreach($response->getSentSMSMessages() as $current) {
    
    $current->getSmsID();
    $current->getSendDate();
    $current->getMessage();
    $current->getNumero();
    $current->getCostCredits();
    $current->getRecipientCount();
}
```

10) Checking SMS message status

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\CheckingSmsMessageStatusRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Checking SMS message status request.
$request = new CheckingSmsMessageStatusRequest();
$request->setSmsID("smsID");

// Call the API and get the response.
$response = $provider->checkingSMSMessageStatus($request);

// Handle the response.
$response->getCode();
$response->getDescription();
```

11) Retrieving SMS replies

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Model\SmsReply;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\RetrievingSmsReplyRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Retrieving SMS reply request.
$request = new RetrievingSmsReplyRequest();
$request->setStart(0);
$request->setOffset(10);

// or use a date interval
// $request->setStartDate(new DateTime("2017-09-14 00:00:00"));
// $request->setEndDate(new DateTime("2017-09-15 00:00:00"));

// Call the API and get the response.
$response = $provider->retrievingSMSReply($request);

// Handle the response.
$response->getCode();
$response->getDescription();

/** @var SmsReply $current */
foreach($response->getSMSReplies() as $current) {
   
    $current->getResponseID();
    $current->getReceptionDate();
    $current->getFrom();
    $current->getText();
    $current->getTo();
    $current->getMessageID();
}
```

12) Sending text-to-speech SMS

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\SendingTextToSpeechSmsRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending text-to-speech SMS request.
$request = new SendingTextToSpeechSmsRequest();
$request->setMessage("message");
$request->addNumero("33600000001");
$request->addNumero("33600000002");
// ...

// Call the API and get the response.
$response = $provider->sendingTextToSpeechSMS($request);

// Handle the response.
$response->getCode();
$response->getDescription();

$response->getSmsID();
```

13) Sending unicode SMS

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\SendingUnicodeSmsRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending unicode SMS request.
$request = new SendingUnicodeSmsRequest();
$request->setMessage("message");
$request->addNumero("33600000001");
$request->addNumero("33600000002");
// ...

// Call the API and get the response.
$response = $provider->sendingUnicodeSMS($request);

// Handle the response.
$response->getCode();
$response->getDescription();

$response->getSmsID();
```

14) Sending SMS in batch mode (attached file)

```php
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\SendingSmsBatchRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending SMS batch request.
$request = new SendingSmsBatchRequest();
$request->setFichier("fichier.csv");

// Call the API and get the response.
$response = $provider->sendingSMSBatch($request);

// Handle the response.
$response->getCode();
$response->getDescription();

$response->getCampagneID();
```
