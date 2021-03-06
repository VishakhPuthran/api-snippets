<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php'; // Loads the library

use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token = "your_auth_token";

$client = new Client($sid, $token);

$number = $client->pricing->voice->numbers("+15108675310")
                 ->fetch(['originationNumber' => '+12421234567']);

$number->outboundCallPrices["current_price"] . PHP_EOL;
