<?php

namespace App\Controllers;

use App\Models\TanggapanModel;
use App\Models\PengaduanModel;
use App\Models\PetugasModel;

class Tanggapan extends BaseController
{
    public function insertAndUpdate()
{
    // Assuming you receive the necessary data through POST or any other method
    $tanggapan = $this->request->getPost('tanggapan');
    $status = $this->request->getPost('status');

    // Retrieve id_pengaduan from the pengaduan table (assuming you have a function to retrieve it)
    $id_pengaduan = $this->getPengaduanId(); // You need to implement this function

    // Get id_petugas from the petugas table (assuming you have a function to retrieve it)
    $id_petugas = $this->getPetugasId(); // You need to implement this function

    // Create instances of the models
    $tanggapanModel = new TanggapanModel();
    $pengaduanModel = new PengaduanModel();

    // Insert data into tanggapan table
    $tanggapanData = [
        'id_pengaduan' => $id_pengaduan,
        'tanggal_tanggapan' => date('Y-m-d H:i:s'),
        'tanggapan' => $tanggapan,
        'status' => $status,
        'id_petugas' => $id_petugas,
    ];

    $tanggapanModel->insert($tanggapanData);

    // Update data in pengaduan table
    $pengaduanData = [
        'status' => $status,
        'id_petugas' => $id_petugas,
    ];

    $pengaduanModel->set($pengaduanData);
    $pengaduanModel->where('id_pengaduan', $id_pengaduan);
    $pengaduanModel->update();

    // Redirect to the index or show success message
    return redirect()->to('/your/redirect/route');
}

}
