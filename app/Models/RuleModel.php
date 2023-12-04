<?php

namespace App\Models;

use CodeIgniter\Model;

class RuleModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'rule';
    protected $primaryKey       = 'id_rule';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_rule', 'kode_gejala', 'kode_penyakit'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'kode_rule'     => 'required',
        'kode_gejala'   => 'required|max_length[1000]',
        'kode_penyakit' => 'required',
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

    public function saveRule($data)
    {
        $this->insert($data);
    }

    public function getRule($id = null)
    {
        if ($id != null) {
            return $this->find($id);
        }
        return $this->findAll();
    }

    public function updateRule($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deleteRule($id)
    {
        return $this->delete($id);
    }
    public function newKodeRule()
    {
        $lastKodeGejala = $this->select('kode_rule')
                              ->orderBy('id_rule', 'DESC')
                              ->first();

        if ($lastKodeGejala) {
            $lastNumber = intval(substr($lastKodeGejala['kode_rule'], 1));
            $newNumber = $lastNumber + 1;
            $newKodeGejala = 'R' . $newNumber;
        } else {
            $newKodeGejala = 'R1';
        }

        return $newKodeGejala;
    }
}
