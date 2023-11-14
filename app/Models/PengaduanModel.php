<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $allowedFields = ['judul_pengaduan', 'tanggal_pengaduan', 'nik', 'isi_laporan', 'lokasi_kejadian', 'foto', 'status'];

    public function laporan_anda()
    {
        return $this->select('*')
                    ->where('status', 0 , 4)
                    ->where('nik', session('nik'))
                    ->orderBy('id_pengaduan', 'desc')
                    ->findAll();
    }
    public function laporan_anda_diterima()
    {
        return $this->select('*')
                    ->where('status', 1)
                    ->where('nik', session('nik'))
                    ->orderBy('id_pengaduan', 'desc')
                    ->findAll();
    }
    public function laporan_anda_diproses()
    {
        return $this->select('*')
                    ->where('status', 2)
                    ->where('nik', session('nik'))
                    ->orderBy('id_pengaduan', 'desc')
                    ->findAll();
    }
    public function laporan_anda_selesai()
    {
        return $this->select('*')
                    ->where('status', 3)
                    ->where('nik', session('nik'))
                    ->orderBy('id_pengaduan', 'desc')
                    ->findAll();
    }
}
