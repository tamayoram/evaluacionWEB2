<?php

$host = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'medical';
$connection = new mysqli($host, $userName, $password, $dbName);
if ($connection->connect_error) {

    die($connection->connect_error);
}

//echo "Connection done";
?>