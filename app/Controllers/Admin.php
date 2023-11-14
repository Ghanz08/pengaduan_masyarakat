<?php

namespace App\Controllers;
use App\Models\PengaduanModel;

class Admin extends BaseController
{
    
    public function __construct()
    
    {
        // Load the PengaduanModel
        $this->PengaduanModel = new PengaduanModel();
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

    public function tesadmin()
    {
        return view('admin/Dashboard');
    }

    public function testabel()
    {
        $data['pengaduan'] = $this->PengaduanModel->findAll();
        return view('admin/Tabel_pengaduan', $data);
    }
}