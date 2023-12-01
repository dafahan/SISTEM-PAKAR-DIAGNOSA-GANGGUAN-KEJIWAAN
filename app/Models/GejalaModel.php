<?php

namespace App\Models;

use CodeIgniter\Model;

class GejalaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'gejala';
    protected $primaryKey       = 'id_gejala';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['gejala', 'kode_gejala','id_gejala'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'gejala'      => 'required|max_length[300]',
        'kode_gejala' => 'required|max_length[5]',
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

    public function saveGejala($data)
    {
        $this->insert($data);
    }

    public function getGejala($id = null)
    {
        if ($id != null) {
            return $this->find($id);
        }
        return $this->findAll();
    }

    public function updateGejala($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deleteGejala($id)
    {
        return $this->delete($id);
    }
}
