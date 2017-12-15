<?php

require_once(__DIR__ . '/../vendor/autoload.php');

$end_point = 'http://localhost:8080/contento.php');
$username = 'username';
$password = 'password';

$client = new edwrodrig\contento\client\Client($end_point);
$client->login($username, $password);
var_dump($client->collections());
