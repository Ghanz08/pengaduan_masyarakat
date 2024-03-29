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
            ->whereIn('status', [1, 5])
            ->where('nik', session('nik'))
            ->orderBy('id_pengaduan', 'desc')
            ->findAll();
    }
    public function laporan_anda_diterima()
    {
        return $this->select('*')
            ->where('status', 2)
            ->where('nik', session('nik'))
            ->orderBy('id_pengaduan', 'desc')
            ->findAll();
    }
    public function laporan_anda_diproses()
    {
        return $this->select('*')
            ->where('status', 3)
            ->where('nik', session('nik'))
            ->orderBy('id_pengaduan', 'desc')
            ->findAll();
    }
    public function laporan_anda_selesai()
    {
        return $this->select('*')
            ->where('status', 4)
            ->where('nik', session('nik'))
            ->orderBy('id_pengaduan', 'desc')
            ->findAll();
    }
    public function laporan_admin()
    {
        return $this->select('*')
            ->whereIn('status', [1, 5])
            ->orderBy('id_pengaduan', 'desc')
            ->findAll();
    }
    public function laporan_admin_diterima()
    {
        return $this->select('*')
            ->where('status', 2)
            ->orderBy('id_pengaduan', 'desc')
            ->findAll();
    }
    public function laporan_admin_diproses()
    {
        return $this->select('*')
            ->where('status', 3)
            ->orderBy('id_pengaduan', 'desc')
            ->findAll();
    }
    public function laporan_admin_selesai()
    {
        return $this->select('*')
            ->where('status', 4)
            ->orderBy('id_pengaduan', 'desc')
            ->findAll();
    }

    public function getReportById($id_pengaduan)
    {
        return $this->find($id_pengaduan);
    }

    public function update_pengaduan($id, $data)
    {
        // Assuming $id is the primary key of the record to be updated
        $this->set($data);
        $this->where('id_pengaduan', $id);
        $this->update();

        // Alternatively, you can use the following one-liner
        // $this->update($id, $data);
    }

    // In PengaduanModel.php
    public function getPengaduanId()
    {
        // Assuming you want the latest id_pengaduan
        $latestPengaduan = $this->orderBy('id_pengaduan', 'DESC')->first();

        if ($latestPengaduan) {
            return $latestPengaduan['id_pengaduan'];
        } else {
            // Handle the case where there are no records in the pengaduan table
            return null;
        }
    }

    public function updatePengaduan($id_pengaduan, $data)
    {
        return $this->set($data)
            ->where('id_pengaduan', $id_pengaduan)
            ->update();
    }

    // In your Pengaduan model (PengaduanModel.php)
    public function getFilteredReports($start_date, $end_date)
    {
        // Perform database query to fetch filtered reports based on date range
        // Modify this query according to your database structure and requirements

        $query = $this->db->table('pengaduan');

        // Add conditions based on provided date range
        if ($start_date !== null) {
            $query->where('tanggal_pengaduan >=', $start_date);
        }

        if ($end_date !== null) {
            $query->where('tanggal_pengaduan <=', $end_date);
        }

        return $query->get()->getResultArray();
    }

}
