<?php

$client = new http\Client;
$request = new http\Client\Request;

$body = new http\Message\Body;
$body->append('{
    "sms_text": "asdsad",
    "mobile_number": "3939393939",
    "sender_id": "asd"
}');

$request->setRequestUrl('https://api.sms-magic.com/v1/sms/send');
$request->setRequestMethod('POST');
$request->setBody($body);

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'content-type' => 'application/json',
  'apikey' => '2145e837ddee22d58521065f014dxxxx'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();
