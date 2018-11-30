<?php

$server = 'us-cdbr-iron-east-01.cleardb.net';
$username = 'b629f283022924';
$password = 'e1c7c3a3';
$database = 'heroku_d65ac763a69ff84';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
