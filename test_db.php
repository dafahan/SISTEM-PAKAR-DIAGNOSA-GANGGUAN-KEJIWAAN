<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'sispak';

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    die('Database connection failed: ' . $connection->connect_error);
}

echo 'Connected to the database successfully!';

$connection->close();
?>
