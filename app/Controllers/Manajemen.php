<?php

namespace App\Controllers;

use App\Models\PengaduanModel;
use App\Models\TanggapanModel;
use App\Models\AdminModel;
use App\Models\UserModel;

class Manajemen extends BaseController
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
        $this->userModel = new UserModel();
        $this->adminModel = new AdminModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();

    }

    public function edit($id_masyarakat)
    {
        $data['masyarakat'] = $this->userModel->find($id_masyarakat);
        //menampilkan halaman register
        return view('admin/Edit_masyarakat', $data);
    }

    public function update($id_masyarakat)
    {
        // Get data from the form
        $data = $this->request->getPost();

        // Run validation
        $this->validation->run($data, 'masyarakat');

        // Check for validation errors
        $errors = $this->validation->getErrors();

        // If there are errors, redirect back to the form
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('admin/edit_masyarakat/' . $id_masyarakat); // Adjust the URL accordingly
        }

        // If there are no errors

        // Check if the password is being updated
        if (!empty($data['password'])) {
            // Hash the new password
            $password = md5($data['password']);
        } else {
            // If the password is not being updated, retain the existing password
            $existingData = $this->userModel->find($id_masyarakat);
            $password = $existingData['password'];
        }

        // Update the data in the database
        $this->userModel->update($id_masyarakat, [
            'password' => $password,
        ]);

        // Redirect to a suitable page after updating
        session()->setFlashdata('success', 'Petugas updated successfully.');
        return redirect()->to('admin/masyarakat');
    }

    public function delete($id_masyarakat)
    {
        // Get the existing data
        $existingData = $this->userModel->find($id_masyarakat);

        // Check if the data exists
        if (!$existingData) {
            // Data not found, redirect or show an error message
            session()->setFlashdata('error', 'Petugas not found.');
            return redirect()->to('admin/masyarakat');
        }

        // Delete the data
        $this->userModel->delete($id_masyarakat);

        // Redirect to a suitable page after deletion
        session()->setFlashdata('success', 'Petugas deleted successfully.');
        return redirect()->to('admin/masyarakat');
    }

}
