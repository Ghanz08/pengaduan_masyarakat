<?php

namespace App\Controllers;

use App\Models\PengaduanModel;

class Masyarakat extends BaseController
{
    public function __construct()
    {
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
        // Fetch all reports from the pengaduan table
        $data['pengaduan'] = $this->pengaduanModel->findAll();

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