<?php

namespace App\Models;

use CodeIgniter\Model;

class TanggapanModel extends Model
{
    protected $table = 'tanggapan';
    protected $primaryKey = 'id_tanggapan';
    protected $allowedFields = ['id_pengaduan', 'tanggal_tanggapan', 'tanggapan', 'status', 'id_petugas'];

    // Your existing methods here...

    public function insertAndUpdate($id_pengaduan, $tanggapan, $status, $id_petugas)
    {
        // Insert into tanggapan table
        $tanggapanData = [
            'id_pengaduan' => $id_pengaduan,
            'tanggal_tanggapan' => date('Y-m-d H:i:s'), // Assuming current date and time
            'tanggapan' => $tanggapan,
            'status' => $status,
            'id_petugas' => $id_petugas,
        ];

        $this->insert($tanggapanData);

        // Update pengaduan table
        $pengaduanModel = new PengaduanModel();

        $pengaduanData = [
            'status' => $status,
            'id_petugas' => $id_petugas,
        ];

        $pengaduanModel->update_pengaduan($id_pengaduan, $pengaduanData);
    }
}
