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
use WBW\Library\SmsMode\Request\CheckingSmsMessageStatusRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());
$provider->setDebug(false);

// Set a couple login/password.
$provider->getAuthentication()->setPseudo("pseudo");
$provider->getAuthentication()->setPass("pass");

// or use an access token.
// $provider->getAuthentication()->setAccessToken("accessToken");

// Create a Checking SMS message status request.
$request = new CheckingSmsMessageStatusRequest();
$request->setSmsID("smsID");

// Call the API and get the response.
$response = $provider->checkingSmsMessageStatus($request);

// Handle the response.
echo "Code: " . $response->getCode() . "\n";
echo "Description: " . $response->getDescription() . "\n";
