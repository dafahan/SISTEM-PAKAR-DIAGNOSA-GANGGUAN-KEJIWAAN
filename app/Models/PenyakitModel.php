<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'penyakit';
    protected $primaryKey       = 'id_penyakit';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_penyakit', 'nama_penyakit', 'penjelasan', 'gejala', 'penanganan'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'kode_penyakit' => 'required|max_length[5]',
        'nama_penyakit' => 'required|max_length[200]',
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

    public function savePenyakit($data)
    {
        return $this->insert($data);
    }

    public function getPenyakit($id = null)
    {
        if ($id != null) {
            return $this->find($id);
        }
        return $this->findAll();
    }

    public function updatePenyakit($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deletePenyakit($id)
    {
        return $this->delete($id);
    }
    public function getByKodePenyakit($kodePenyakit)
    {       
        if (empty($kodePenyakit)||$kodePenyakit == null) {
            return "";
        }
        return $this->orWhereIn('kode_penyakit', $kodePenyakit)->get();

    }
    public function newKodePenyakit()
    {
        $lastKodeGejala = $this->select('kode_penyakit')
                              ->orderBy('id_penyakit', 'DESC')
                              ->first();

        if ($lastKodeGejala) {
            $lastNumber = intval(substr($lastKodeGejala['kode_penyakit'], 1));
            $newNumber = $lastNumber + 1;
            $newKodeGejala = 'P' . $newNumber;
        } else {
            $newKodeGejala = 'P1';
        }

        return $newKodeGejala;
    }
}
