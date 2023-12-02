<?php

// Read the contents of the file
$jsonData = file_get_contents('public\files\response.json');

if ($jsonData === false) {
    die('Error reading the file');
}

// Parse JSON data
$data = json_decode($jsonData, true);

// Do something with the data
var_dump($data["hasPart"]);
