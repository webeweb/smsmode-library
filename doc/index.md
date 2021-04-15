DOCUMENTATION
=============

1) Authentication

```php
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
// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Call the API and get the response.
$response = $provider->creatingAPIKey(new CreatingAPIKeyRequest());

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
// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending SMS message request.
$request = new SendingSMSMessageRequest();
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
// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Call the API and get the response.
$response = $provider->accountBalance(new AccountBalanceRequest());

// Handle response.
$response->getCode();
$response->getDescription();

$response->getAccountBalance();
```

5) Creating sub-account

```php
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
// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Deleting sub-account request.
$request = new DeletingSubAccountRequest();
$request->setPseudoToDelete("pseudoToDelete")

// Call the API and get the response.
$response = $provider->deletingSubAccount($request);

// Handle the response.
$response->getCode();
$response->getDescription();
```

6) Transferring credits from one account to another

```php
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
// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Deleting SMS request.
$request = new DeletingSMSRequest();
$request->setSmsID("smsID");

// Call the API and get the response.
$response = $provider->deletingSMS($request);

// Handle the response.
$response->getCode();
$response->getDescription();
```

9) Sent SMS message list

```php
// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Call the API and get the response.
$response = $provider->sentSMSMessageList(new SentSMSMessageListRequest());

// Handle response.
$response->getCode();
$response->getDescription();

/** @var SentSMSMessage $current */
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
// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Checking SMS message status request.
$request = new CheckingSMSMessageStatusRequest();
$request->setSmsID("smsID");

// Call the API and get the response.
$response = $provider->checkingSMSMessageStatus($request);

// Handle the response.
$response->getCode();
$response->getDescription();
```

11) Retrieving SMS replies

```php
// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Retrieving SMS reply request.
$request = new RetrievingSMSReplyRequest();
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

/** @var SMSReply $current */
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
// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending text-to-speech SMS request.
$request = new SendingTextToSpeechSMSRequest();
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
// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending unicode SMS request.
$request = new SendingUnicodeSMSRequest();
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
// Create the API provider.
$provider = new ApiProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending SMS batch request.
$request = new SendingSMSBatchRequest();
$request->setFichier("fichier.csv");

// Call the API and get the response.
$response = $provider->sendingSMSBatch($request);

// Handle the response.
$response->getCode();
$response->getDescription();

$response->getCampagneID();
```
