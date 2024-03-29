<?php

namespace App\Controllers;

use App\Models\PengaduanModel;
use App\Models\TanggapanModel;

use Dompdf\Dompdf;
use Dompdf\Options;

class Pengaduan extends BaseController
{
    protected $tanggapanModel;
    protected $session;
    protected $pengaduanModel;
    public function __construct()
    {
        $this->pengaduanModel = new PengaduanModel();
        $this->tanggapanModel = new TanggapanModel();
        $this->session = session();
    }

    public function index()
    {
        // Display existing reports or redirect to the form
        // ...
    }

    public function create()
    {
        // Display the form to create a new report
        return view('pengaduan/create');
    }

    public function store()
    {
        // Handle form submission and store the report in the database

        $data = [
            'judul_pengaduan' => $this->request->getPost('judul_pengaduan'),
            'tanggal_pengaduan' => $this->request->getPost('tanggal_pengaduan'),
            'nik' => $this->request->getPost('nik'),
            // You may fetch this from the session
            'isi_laporan' => $this->request->getPost('isi_laporan'),
            'lokasi_kejadian' => $this->request->getPost('lokasi_kejadian'),
            'status' => 1,
            // Assuming status 0 is the default status
        ];

        // Upload image
        $file = $this->request->getFile('foto');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('./uploads', $newName);
            $data['foto'] = $newName;
        }

        // Save to database
        $this->pengaduanModel->insert($data);

        // Redirect to the index or show success message
        return redirect()->to('/masyarakat');
    }

    public function edit($id)
    {
        // Retrieve the report by ID and display the edit form
        $data['pengaduan'] = $this->pengaduanModel->find($id);
        return view('masyarakat/Edit', $data);
    }

    public function update($id)
    {
        // Handle form submission and update the report in the database

        $data = [
            'judul_pengaduan' => $this->request->getPost('judul_pengaduan'),
            'tanggal_pengaduan' => $this->request->getPost('tanggal_pengaduan'),
            'nik' => $this->request->getPost('nik'),
            // You may fetch this from the session
            'isi_laporan' => $this->request->getPost('isi_laporan'),
            'lokasi_kejadian' => $this->request->getPost('lokasi_kejadian'),
            'status' => '1'
        ];

        // Upload image if a new one is provided
        $file = $this->request->getFile('foto');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('./uploads', $newName);
            $data['foto'] = $newName;
        }

        // Update the record in the database
        $this->pengaduanModel->update($id, $data);

        // Redirect to the index or show success message
        return redirect()->to('/masyarakat');
    }

    public function delete($id_pengaduan)
    {
        // Delete the report from the database

        $report = $this->pengaduanModel->find($id_pengaduan);

        // Delete the image file
        if ($report['foto'] != null) {
            unlink('./uploads/' . $report['foto']);
        }

        // Delete the record from the database
        $this->tanggapanModel->where('id_pengaduan', $id_pengaduan)->delete();
        $this->pengaduanModel->delete($id_pengaduan);

        // Redirect to the index or show success message
        return redirect()->to('/masyarakat/laporan_anda');
    }

    public function diterima($id)
    {
        $data = [
            'id' => $id,
            'status' => '2',
        ];
        $this->pengaduanModel->update_pengaduan($id, $data);


        // Flash data in CodeIgniter 4
        $this->session->setFlashdata('pesan', 'Pesanan Berhasil Di Proses !!!');
        return redirect()->to('admin/pengaduan');
    }

    // public function diproses($id)
    // {
    //     $this->validation->setRules([
    //         'no_resi' => 'required',
    //     ]);

    //     if (!$this->validation->withRequest($this->request)->run()) {
    //         // Validation failed, handle accordingly
    //         return $this->index();
    //     }

    //     $data = [
    //         'id' => $id,
    //         'no_resi' => $this->request->getPost('no_resi'),
    //         'status' => '3',
    //     ];
    //     $this->pengaduanModel->update_pengaduan($data);

    //     // Flash data in CodeIgniter 4
    //     $this->session->setFlashdata('pesan', 'Pesanan Berhasil Di Proses !!!');
    //     return redirect()->to('dashboard/pesanan_masuk');
    // }

    public function selesai($id)
    {
        $data = [
            'id' => $id,
            'status' => '4',
        ];
        $this->pengaduanModel->update_pengaduan($id, $data);

        // Flash data in CodeIgniter 4
        $this->session->setFlashdata('pesan', 'Pesanan Berhasil Di Proses !!!');
        return redirect()->to('admin/pengaduan');
    }

    public function ditolak($id)
    {
        $data = [
            'id' => $id,
            'status' => '5',
        ];
        $this->pengaduanModel->update_pengaduan($id, $data);

        // Flash data in CodeIgniter 4
        $this->session->setFlashdata('pesan', 'Pesanan Berhasil Di Proses !!!');
        return redirect()->to('admin/pengaduan');
    }


}
