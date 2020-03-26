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
use WBW\Library\SMSMode\Model\Request\AddingContactRequest;
use WBW\Library\SMSMode\Provider\APIProvider;

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
$model->setMobile("33600000000");

// Call the API and get the response.
$response = $provider->addingContact($model);

// Handle the response.
echo "Code: " . $response->getCode() . "\n";
echo "Description: " . $response->getDescription() . "\n";
