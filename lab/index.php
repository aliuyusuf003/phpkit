<?php

use app\Email as E;
require_once 'vendor/autoload.php';


$email = new E();
$person = new app\Person();

// $client = new \GuzzleHttp\Client();
$client = new \GuzzleHttp\Client(['verify' => false]);  // for local development
// $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

// echo $response->getStatusCode(); // 200
// echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
// echo $response->getBody();
// echo '<code>';
// echo $response->getBody(); // 
// echo '</code>';
