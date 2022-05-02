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
use WBW\Library\SmsMode\Request\CreatingSubAccountRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());
$provider->setDebug(false);

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
echo "Code: " . $response->getCode() . "\n";
echo "Description: " . $response->getDescription() . "\n";
