<?php

namespace App\Models;

use CodeIgniter\Model;

class TanggapanModel extends Model
{
    protected $table = 'tanggapan';
    protected $primaryKey = 'id_tanggapan';
    protected $allowedFields = ['id_pengaduan', 'tanggal_tanggapan', 'tanggapan', 'status', 'id_petugas'];

    // Your existing methods here...
    public function getTanggapanById($id_pengaduan)
    {
        return $this->where('id_pengaduan', $id_pengaduan)->findAll();
    }
}
