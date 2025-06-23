<?php

use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpClient\HttpClient;

header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: http://127.0.0.1:5500');

require_once 'vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->loadEnv('.env');

$apiKey = $_ENV['API_KEY'];

$client = HttpClient::create();
$searchTerm = $_GET['s'];
$response = $client->request('GET', "https://api.themoviedb.org/3/search/movie?query=$searchTerm&api_key=$apiKey");

echo $response->getContent();
