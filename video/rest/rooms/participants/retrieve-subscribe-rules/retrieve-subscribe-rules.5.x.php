<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Find your credentials at twilio.com/console
$apiKeySid = "SKXXXX";
$apiKeySecret = "your_auth_apiKeySecret";
$client = new Client($apiKeySid, $apiKeySecret);

$subscribeRules = $client->video->rooms('RMXXXX')->participants('PAXXXX')
  ->subscribeRules->fetch();

foreach ($subscribeRules->rules as $rule) {
    echo "Read rule with type = " . $rule["type"];
}
