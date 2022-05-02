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
use WBW\Library\SmsMode\Request\RetrievingSmsReplyRequest;

// Create the API provider.
$provider = new ApiProvider(new Authentication());
$provider->setDebug(false);

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
$response = $provider->retrievingSmsReply($request);

// Handle the response.
echo "Code: " . $response->getCode() . "\n";
echo "Description: " . $response->getDescription() . "\n\n";

foreach ($response->getSmsReplies() as $current) {

    echo "\n";
    echo "Response ID: " . $current->getResponseID() . "\n";
    echo "Reception date: " . $current->getReceptionDate()->format("Y-m-d H:i") . "\n";
    echo "From: " . $current->getFrom() . "\n";
    echo "Text: " . $current->getText() . "\n";
    echo "To: " . $current->getTo() . "\n";
    echo "Message ID: " . $current->getMessageID() . "\n\n";
}
