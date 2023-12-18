<?php

namespace App\Models;

use CodeIgniter\Model;

class DiagnosisModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'diagnosis';
    protected $primaryKey       = 'id'; // Assuming your primary key is 'id'
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id', 'nama_penyakit', 'tanggal']; // Add your table columns here

    // Dates
    protected $useTimestamps = false;
   

    // Validation
    protected $validationRules      = [
        'user_id'       => 'required',
        'nama_penyakit' => 'required|max_length[255]',
        'tanggal'       => 'required|valid_date', // You might need to adjust this based on your needs
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getWithUser($userId)
    {
        $this->select('diagnosis.*, users.username as username');
        $this->join('users', 'users.id = diagnosis.user_id');
        $this->where('user_id', $userId);

        return $this->get()->getResultArray();
    }

    public function getWithUsers($id = null)
    {
        if ($id != null) {
            $this->where('diagnosis.user_id', $id);
        }

        $this->select('diagnosis.*, users.username as username, users.email as email');
        $this->join('users', 'users.id = diagnosis.user_id');

        return $this->findAll();
    }



    public function saveDiagnosis($data)
    {   
        try {
            // Panggil metode insert di sini
            $this->insert($data);
            
            // Jika eksekusi sampai di sini tanpa pengecualian, maka operasi berhasil
           
        } catch (Exception $e) {
           
        }
        
    }

    public function getDiagnosis($id = null)
    {
        if ($id != null) {
            return $this->find($id);
        }
        return $this->findAll();
    }

    public function updateDiagnosis($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deleteDiagnosis($id)
    {
        return $this->where('id', $id)->delete();
    }
}
