<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__ . "/../vendor/autoload.php";

use WBW\Library\SMSMode\Model\Authentication;
use WBW\Library\SMSMode\Model\Request\SendingUnicodeSMSRequest;
use WBW\Library\SMSMode\Provider\APIProvider;

// Create the API provider.
$provider = new APIProvider(new Authentication());

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Sending unicode SMS model.
$model = new SendingUnicodeSMSRequest();
$model->setMessage("message");
$model->addNumero("33600000001");
$model->addNumero("33600000002");
// ...

// Call the API and get the response.
$response = $provider->sendingUnicodeSMS($model);

// Handle the response.
echo "Code: " . $response->getCode() . "\n";
echo "Description: " . $response->getDescription() . "\n";

echo "SMS ID: " . $response->getSmsID() . "\n";
