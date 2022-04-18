<?php

require 'vendor/autoload.php';

//использование пространств имён
use GuzzleHttp\Client;



$client = new Client();
$response = $client->get('https://ithillel.ua/ua');
echo $response->getBody()->getContents();