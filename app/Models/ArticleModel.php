<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    public function fetchData()
    {
        $baseUrl = 'https://api.nhs.uk/mental-health';
        $apiVersion = '1.0';
        $subscriptionKey = '2da51202b1bf42dc88d29158ec98acf2';
        $apiUrl = "{$baseUrl}?api-version={$apiVersion}";
    
        $ch = curl_init($apiUrl);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['subscription-key: ' . $subscriptionKey]); // Add the subscription key to the headers
        $data;
        $response = curl_exec($ch);
        if ($response) {
            $data = json_decode($response, true);
        } else {
            echo 'No response received.';
        }
    
        if (json_last_error() !== JSON_ERROR_NONE) {
            die('Error parsing JSON');
        }
    
        return $data;
    }
}
