DOCUMENTATION
=============

1° Authentication
---

```php
// Create an authentication model.
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
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Call the API and get the response.
$response = $provider->creatingAPIKey(new CreatingAPIKeyRequest());

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


2° Sending SMS message
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending SMS message model.
$model = new SendingSMSMessageRequest();
$model->setMessage("message")
$model->addNumero("33600000001")
$model->addNumero("33600000002")
// ...

// Call the API and get the response.
$response = $provider->sendingSMSMessage($model);

// Handle the response.
$response->getCode();
$response->getDescription();

$response->getSmsID();
```

3° Delivery report
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Delivery report model.
$model = new DeliveryReportRequest();
$model->setSmsID("smsID")

// Call the API and get the response.
$response = $provider->deliveryReport($model);

// Handle the response.
$response->getCode();
$response->getDescription();

foreach($response->getDeliveryReports() as $current) {
    $current->getCode();
    $current->getNumero();
}
```

4° Account balance
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

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

5° Creating sub-account
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Creating sub-account model.
$model = new CreatingSubAccountRequest();
$model->setNewPseudo("pseudo");
$model->setNewPass("pass")

// Call the API and get the response.
$response = $provider->creatingSubAccount($model);

// Handle the response.
$response->getCode();
$response->getDescription();
```

Deleting sub-account :

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Deleting sub-account model.
$model = new DeletingSubAccountRequest();
$model->setPseudoToDelete("pseudoToDelete")

// Call the API and get the response.
$response = $provider->deletingSubAccount($model);

// Handle the response.
$response->getCode();
$response->getDescription();
```

6° Transferring credits from one account to another
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Transferring credits model.
$model = new TransferringCreditsRequest();
$model->setCreditAmount(212);
$model->setTargetPseudo("targetPseudo");

// Call the API and get the response.
$response = $provider->transferringCredits($model);

// Handle the response.
$response->getCode();
$response->getDescription();
```

7° Adding contacts
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create an Adding contact model.
$model = new AddingContactRequest();
$model->setNom("lastname");
$model->setMobile("33600000000")

// Call the API and get the response.
$response = $provider->addingContact($model);

// Handle the response.
$response->getCode();
$response->getDescription();
```

8° Deleting SMS
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Deleting SMS model.
$model = new DeletingSMSRequest();
$model->setSmsID("smsID")

// Call the API and get the response.
$response = $provider->deletingSMS($model);

// Handle the response.
$response->getCode();
$response->getDescription();
```

9° Sent SMS message list
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

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

foreach($response->getSentSMSMessages() as $current) {
    $current->getSmsID();
    $current->getSendDate();
    $current->getMessage();
    $current->getNumero();
    $current->getCostCredits();
    $current->getRecipientCount();
}
```

10° Checking SMS message status
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Checking SMS message status model.
$model = new CheckingSMSMessageStatusRequest();
$model->setSmsID("smsID")

// Call the API and get the response.
$response = $provider->checkingSMSMessageStatus($model);

// Handle the response.
$response->getCode();
$response->getDescription();
```

11° Retrieving SMS replies
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Retrieving SMS reply model.
$model = new RetrievingSMSReplyRequest();
$model->setStart(0);
$model->setOffset(10);

// or use a date interval
// $model->setStartDate(new DateTime("2017-09-14 00:00:00"));
// $model->setEndDate(new DateTime("2017-09-15 00:00:00"));

// Call the API and get the response.
$response = $provider->retrievingSMSReply($model);

// Handle the response.
$response->getCode();
$response->getDescription();

foreach($response->getSMSReplies() as $current) {
    $current->getResponseID();
    $current->getReceptionDate();
    $current->getFrom();
    $current->getText();
    $current->getTo();
    $current->getMessageID();
}
```

12° Sending text-to-speech SMS
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending text-to-speech SMS model.
$model = new SendingTextToSpeechSMSRequest();
$model->setMessage("message")
$model->addNumero("33600000001")
$model->addNumero("33600000002")
// ...

// Call the API and get the response.
$response = $provider->sendingTextToSpeechSMS($model);

// Handle the response.
$response->getCode();
$response->getDescription();

$response->getSmsID();
```

13° Sending unicode SMS
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending unicode SMS model.
$model = new SendingUnicodeSMSRequest();
$model->setMessage("message")
$model->addNumero("33600000001")
$model->addNumero("33600000002")
// ...

// Call the API and get the response.
$response = $provider->sendingUnicodeSMS($model);

// Handle the response.
$response->getCode();
$response->getDescription();

$response->getSmsID();
```

14° Sending SMS in batch mode (attached file)
---

```php
// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending SMS batch model.
$model = new SendingSMSBatchRequest();
$model->setFichier("fichier.csv")

// Call the API and get the response.
$response = $provider->sendingSMSBatch($model);

// Handle the response.
$response->getCode();
$response->getDescription();

$response->getCampagneID();
```
