<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table            = 'petugas';
    protected $primaryKey       = 'id_petugas';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["nama_petugas", "username", "telepon", "password", "level"];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
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

    // In PetugasModel.php
public function getPetugasId($username)
{
    // Assuming you want to get id_petugas based on the provided username
    $petugas = $this->where('username', $username)->first();
    
    if ($petugas) {
        return $petugas['id_petugas'];
    } else {
        // Handle the case where there is no petugas with the provided username
        return null;
    }
}

public function getPetugasbyId($id_petugas)
    {
        return $this->where('id_petugas', $id_petugas)->findAll();
    }

}
