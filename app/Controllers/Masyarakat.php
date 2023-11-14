<?php

namespace App\Controllers;

use App\Models\PengaduanModel;
use App\Models\UserModel;

class Masyarakat extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        // Load the PengaduanModel
        $this->pengaduanModel = new PengaduanModel();
        $this->session = session();
    }

    public function index()
    {
        return view('/masyarakat/Home');
    }

    public function form()
    {
        return view('/masyarakat/Form');
    }

    public function laporan_anda()
    {
        $user = $this->userModel->where('nik')->first();

        //cek apakah ada session bernama isLogin
        if(!$this->session->has('userisLogin')){
            return redirect()->to('/login');
        }

        // Fetch all reports from the pengaduan table
        $data['pengaduan'] = $this->pengaduanModel->laporan_anda();
        $data['diterima'] = $this->pengaduanModel->laporan_anda_diterima();
        $data['diproses'] = $this->pengaduanModel->laporan_anda_diproses();
        $data['selesai'] = $this->pengaduanModel->laporan_anda_selesai();

        return view('/masyarakat/Laporan_anda', $data);
    }

    public function About_us()
    {
        return view('/masyarakat/About_us');
    }

    public function Profile()
    {
        return view('/masyarakat/Profile');
    }

    public function complete()
    {
        return view('/masyarakat/Complete');
    }

    public function detail()
    {
        return view('/masyarakat/Laporan_details');
    }


}