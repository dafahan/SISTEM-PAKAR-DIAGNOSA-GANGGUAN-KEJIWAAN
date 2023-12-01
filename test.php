<?php

$baseUrl = 'https://api.nhs.uk/mental-health';
$apiVersion = '1.0';
$subscriptionKey = '2da51202b1bf42dc88d29158ec98acf2'; // Use your subscription key

// Construct the full API URL
$apiUrl = "{$baseUrl}?api-version={$apiVersion}";

// Set up the cURL session
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
curl_setopt($ch, CURLOPT_HTTPHEADER, ['subscription-key: ' . $subscriptionKey]); // Add the subscription key to the headers

// Execute the cURL session
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Write the response to a file
file_put_contents('response.txt', $response);

// Process the response
if ($response) {
    // The response is a JSON string, so you may want to decode it
    $data = json_decode($response, true);

    // Process the data as needed
    print_r($data);
} else {
    echo 'No response received.';
}
?>
