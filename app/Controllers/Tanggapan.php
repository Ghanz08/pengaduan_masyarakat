<?php

namespace App\Controllers;

use App\Models\TanggapanModel;
use App\Models\PengaduanModel;
use App\Models\AdminModel;

class Tanggapan extends BaseController
{
    protected $session;
    protected $tanggapanModel;
    protected $adminModel;
    protected $pengaduanModel;
    
    public function __construct()
    {
        $this->tanggapanModel = new TanggapanModel();
        $this->pengaduanModel = new PengaduanModel();
        $this->adminModel = new AdminModel();
        $this->session = session();
    }

    public function tanggapan($id_pengaduan)
{
    // Assuming you receive the necessary data through POST or any other method
    $tanggapan = $this->request->getPost('tanggapan');
    $id_pengaduan = $this->request->getPost('id_pengaduan');

    // Insert data into tanggapan table
    $tanggapanData = [
        'id_pengaduan' => $id_pengaduan,
        'tanggal_tanggapan' => date('Y-m-d H:i:s'),
        'tanggapan' => $tanggapan,
        'status' => '3',
        'id_petugas' => session('id_petugas'),
    ];

    $this->tanggapanModel->insert($tanggapanData);

    // Update data in pengaduan table
    $pengaduanData = [
        'status' => '3',
        'id_petugas' => session('id_petugas'),
    ];
    
    $this->pengaduanModel->update($id_pengaduan, $pengaduanData);

    // Redirect to the index or show success message
    return redirect()->to('admin/pengaduan');
}

    

    
}
