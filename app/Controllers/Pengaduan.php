<?php

namespace App\Controllers;

use App\Models\PengaduanModel;

class Pengaduan extends BaseController
{
    public function __construct()
    {
        $this->pengaduanModel = new PengaduanModel();
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
            'nik' => $this->request->getPost('nik'), // You may fetch this from the session
            'isi_laporan' => $this->request->getPost('isi_laporan'),
            'lokasi_kejadian' => $this->request->getPost('lokasi_kejadian'),
            'status' => 0, // Assuming status 0 is the default status
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
            'nik' => $this->request->getPost('nik'), // You may fetch this from the session
            'isi_laporan' => $this->request->getPost('isi_laporan'),
            'lokasi_kejadian' => $this->request->getPost('lokasi_kejadian'),
            'status' => $this->request->getPost('status'),
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

    public function delete($id)
    {
        // Delete the report from the database

        $report = $this->pengaduanModel->find($id);

        // Delete the image file
        if ($report['foto'] != null) {
            unlink('./uploads/' . $report['foto']);
        }

        // Delete the record from the database
        $this->pengaduanModel->delete($id);

        // Redirect to the index or show success message
        return redirect()->to('/pengaduan');
    }

}
