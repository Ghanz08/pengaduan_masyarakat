<?php

namespace App\Controllers;

use App\Models\PengaduanModel;
use App\Models\TanggapanModel;
use App\Models\AdminModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    protected $session;
    protected $tanggapanModel;
    protected $adminModel;
    protected $pengaduanModel;
    protected $userModel;

    public function __construct()
    {
        // Load the PengaduanModel
        $this->pengaduanModel = new PengaduanModel();
        $this->tanggapanModel = new TanggapanModel();
        $this->adminModel = new AdminModel();
        $this->userModel = new UserModel();
        $this->session = session();
    }

    public function index()
    {
        if (!$this->session->has('isLogin')) {
            // Redirect to the login page
            return redirect()->to('/login');
        }
        // Load the admin dashboard view
        return view('admin/Dashboard');
    }

    public function dashboard()
    {
        if (!$this->session->has('isLogin')) {
            // Redirect to the login page
            return redirect()->to('/login');
        }
        // Load the admin dashboard view
        return view('admin/Dashboard');
    }

    public function pengaduan()
    {
        if (!$this->session->has('isLogin')) {
            // Redirect to the login page
            return redirect()->to('/login');
        }
        // Fetch all reports from the pengaduan table
        $data['pengaduan'] = $this->pengaduanModel->laporan_admin();
        $data['diterima'] = $this->pengaduanModel->laporan_admin_diterima();
        $data['diproses'] = $this->pengaduanModel->laporan_admin_diproses();
        $data['selesai'] = $this->pengaduanModel->laporan_admin_selesai();

        // Load the admin Tabel_pengaduan view with data
        return view('admin/Tabel_pengaduan', $data);
    }

    public function manajemen_masyarakat()
    {
        if (!$this->session->has('isLogin')) {
            // Redirect to the login page
            return redirect()->to('/login');
        }
        $data['masyarakat'] = $this->userModel->findAll();
        // Load the admin Masyarakat view
        return view('admin/Masyarakat', $data);
    }

    public function manajemen_petugas()
    {
        if (!$this->session->has('isLogin')) {
            // Redirect to the login page
            return redirect()->to('/login');
        }
        // Fetch all petugas data
        $data['petugas'] = $this->adminModel->findAll();

        // Load the admin Petugas view with data
        return view('admin/Petugas', $data);
    }

    public function lapor_detail($id_pengaduan)
    {
        if (!$this->session->has('isLogin')) {
            // Redirect to the login page
            return redirect()->to('/login');
        }
        
        // Retrieve the report and tanggapan by ID
        $data['pengaduan'] = $this->pengaduanModel->getReportById($id_pengaduan);
        $data['tanggapan'] = $this->tanggapanModel->getTanggapanById($id_pengaduan);

        // Load the admin Laporan_detail view with data
        return view('Admin/Laporan_detail', $data);
    }

    public function generate()
    {
        if (!$this->session->has('isLogin')) {
            // Redirect to the login page
            return redirect()->to('/login');
        }

        // Load the admin Laporan_detail view with data
        return view('admin/generate');
    }
}
