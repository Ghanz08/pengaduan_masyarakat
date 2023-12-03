<?php

namespace App\Controllers;

use App\Models\PengaduanModel;
use App\Models\TanggapanModel;
use App\Models\AdminModel;
use App\Models\UserModel;

class Petugas extends BaseController
{
    protected $session;
    protected $tanggapanModel;
    protected $adminModel;
    protected $pengaduanModel;
    protected $validation;
    protected $userModel;

    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->pengaduanModel = new PengaduanModel();
        $this->tanggapanModel = new TanggapanModel();
        $this->adminModel = new AdminModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();

    }

    public function tambah()
    {
        $data['petugas'] = $this->adminModel->findAll();
        //menampilkan halaman login
        return view('admin/Tambah');
    }

    public function edit($id_petugas)
    {
        $data['petugas'] = $this->adminModel->find($id_petugas);
        //menampilkan halaman register
        return view('admin/Edit', $data);
    }

    public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();

        //jalankan validasi
        $this->validation->run($data, 'petugas');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('admin/petugas');
        }

        //jika tdk ada error 


        //hash password digabung dengan salt
        $password = md5($data['password']);

        //masukan data ke database
        $this->adminModel->save([
            'nama_petugas' => $data['nama_petugas'],
            'username' => $data['username'],
            'password' => $password,
            'telepon' => $data['telepon'],
            'level' => 'petugas',
        ]);

        //arahkan ke halaman login
        session()->setFlashdata('login', 'Congratulation! Your account has been created.');
        return redirect()->to('admin/petugas');
    }

    public function update($id_petugas)
    {
        // Get data from the form
        $data = $this->request->getPost();

        // Run validation
        $this->validation->run($data, 'update_petugas');

        // Check for validation errors
        $errors = $this->validation->getErrors();

        // If there are errors, redirect back to the form
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('admin/edit/' . $id_petugas); // Adjust the URL accordingly
        }

        // If there are no errors

        // Check if the password is being updated
        if (!empty($data['password'])) {
            // Hash the new password
            $password = md5($data['password']);
        } else {
            // If the password is not being updated, retain the existing password
            $existingData = $this->adminModel->find($id_petugas);
            $password = $existingData['password'];
        }

        // Update the data in the database
        $this->adminModel->update($id_petugas, [
            'nama_petugas' => $data['nama_petugas'],
            'username' => $data['username'],
            'telepon' => $data['telepon'],
            'password' => $password,
            'level' => 'petugas',
        ]);

        // Redirect to a suitable page after updating
        session()->setFlashdata('success', 'Petugas updated successfully.');
        return redirect()->to('admin/petugas');
    }

    public function delete($id_petugas)
    {
        // Get the existing data
        $existingData = $this->adminModel->find($id_petugas);

        // Check if the data exists
        if (!$existingData) {
            // Data not found, redirect or show an error message
            session()->setFlashdata('error', 'Petugas not found.');
            return redirect()->to('admin/petugas');
        }

        // Delete the data
        $this->adminModel->delete($id_petugas);

        // Redirect to a suitable page after deletion
        session()->setFlashdata('success', 'Petugas deleted successfully.');
        return redirect()->to('admin/petugas');
    }


}