<?php
require_once __DIR__ . '/../vendor/autoload.php';

$client = new MongoDB\Client("mongodb://127.0.0.1:27017");

$db = $client->web_project;     // database name
$collection = $db->users;       // collection name
?>