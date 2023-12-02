<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    public function fetchData()
    {
        $filePath = FCPATH . 'files/response.json';
       // dd($filePath);
        if (!file_exists($filePath)) {
            die('Error: File not found');
        }

        $jsonData = file_get_contents($filePath);

        if ($jsonData === false) {
            die('Error reading the file');
        }

        $data = json_decode($jsonData, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            die('Error parsing JSON');
        }
        
        return $data;
    }
}
