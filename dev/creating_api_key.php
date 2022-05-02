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

use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Provider\ApiProvider;
use WBW\Library\SmsMode\Request\CreatingApiKeyRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());
$provider->setDebug(false);

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Call the API and get the response.
$response = $provider->creatingApiKey(new CreatingApiKeyRequest());

// Handle the response.
echo "Exception:" . print_r($response->getException(), true) . "\n\n";

echo "Code: " . $response->getCode() . "\n";
echo "Description: " . $response->getDescription() . "\n\n";

echo "Id: " . $response->getId() . "\n";
echo "Access token: " . $response->getAccessToken() . "\n";
echo "Account: " . $response->getAccount() . "\n";
echo "Creation date: " . $response->getCreationDate()->format("Y-m-d H:i") . "\n";
echo "Expiration: " . $response->getExpiration()->format("Y-m-d H:i") . "\n";
echo "State: " . $response->getState() . "\n";
