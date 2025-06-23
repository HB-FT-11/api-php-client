<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create();

$response = $client->request('GET', "https://jsonplaceholder.typicode.com/users/3");

// $headers = $response->getHeaders();
// var_dump($headers);

$data = $response->toArray();
var_dump($data);
