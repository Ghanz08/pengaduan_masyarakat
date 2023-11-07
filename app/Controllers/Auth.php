<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new UserModel();
        $this->adminModel = new AdminModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    
    public function login()
    {
        //menampilkan halaman login
        return view('auth/login');
    }
    
    public function register()
    {
        //menampilkan halaman register
        return view('auth/register');
    }
    
    public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();
        
        //jalankan validasi
        $this->validation->run($data, 'register');
        
        //cek errornya
        $errors = $this->validation->getErrors();
        
        //jika ada error kembalikan ke halaman register
        if($errors){
            session()->setFlashdata('error', $errors);
            return redirect()->to('/auth/register');
        }
        
        //jika tdk ada error 
        
        
        //hash password digabung dengan salt
        $password = md5($data['password']);
        
        //masukan data ke database
        $this->userModel->save([
            'nik' => $data['nik'],
            'password' => $password,
            ]);
        
        //arahkan ke halaman login
        session()->setFlashdata('login', 'Congratulation! Your account has been created.');
        return redirect()->to('/auth/login');
    }
    
    public function valid_login()
{
    // Get data from the form
    $data = $this->request->getPost();
    
    // Check if a user with the given 'username' or 'nik' exists in both tables
    $user = $this->userModel->where('nik', $data['nik'])->first();
    $admin = $this->adminModel->where('username', $data['username'])->first();

    // Check if a user is found in the 'admin' table
    if ($admin) {
        // Check the password
        if ($admin['password'] != md5($data['password'])) {
            session()->setFlashdata('password', 'Wrong Password');
            return redirect()->to('/auth/login');
        } else {
            // If the password is correct, check the 'role'
            if ($admin['role'] == 'admin') {
                $sessLogin = [
                    'isLogin' => true,
                    'username' => $admin['username'],
                    'role' => $admin['role']
                ];
                $this->session->set($sessLogin);
                return redirect()->to('/admin');
            } else {
                $sessLogin = [
                    'isLogin' => true,
                    'username' => $admin['username'],
                    'role' => $admin['role']
                ];
                $this->session->set($sessLogin);
                return redirect()->to('/user');
            }
        }
    } elseif ($user) {
        // Check if a user is found in the 'user' table
        if ($user['password'] != md5($data['password'])) {
            session()->setFlashdata('password', 'Wrong Password');
            return redirect()->to('/auth/login');
        } else {
            $sessLogin = [
                'isLogin' => true,
                'nik' => $user['nik'],
            ];
            $this->session->set($sessLogin);
            return redirect()->to('/user');
        }
    } else {
        // If neither 'admin' nor 'user' is found, display an error message
        session()->setFlashdata('username', 'NIK not found');
        return redirect()->to('/auth/login');
    }
}


    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/auth/login');
    }
    
}