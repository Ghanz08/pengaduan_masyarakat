<?php

namespace App\Controllers;
use App\Models\PengaduanModel;

class Admin extends BaseController
{
    
    public function __construct()
    
    {
        // Load the PengaduanModel
        $this->pengaduanModel = new PengaduanModel();
        $this->session = session();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        
        // cek username jika user dari session
        if($this->session->get('nik') != 1){
            return redirect()->to('/user');
        }
        
    }

    public function dashboard()
    {
        return view('admin/Dashboard');
    }

    public function pengaduan()
    {
        // Fetch all reports from the pengaduan table
        $data['pengaduan'] = $this->pengaduanModel->laporan_admin();
        $data['diterima'] = $this->pengaduanModel->laporan_admin_diterima();
        $data['diproses'] = $this->pengaduanModel->laporan_admin_diproses();
        $data['selesai'] = $this->pengaduanModel->laporan_admin_selesai();
        return view('admin/Tabel_pengaduan', $data);
    }
}