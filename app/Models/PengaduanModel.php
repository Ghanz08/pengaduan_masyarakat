<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $allowedFields = ['judul_pengaduan', 'tanggal_pengaduan', 'nik', 'isi_laporan', 'lokasi_kejadian', 'foto', 'status'];
}
