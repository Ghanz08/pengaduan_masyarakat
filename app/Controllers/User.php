<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('userisLogin')){
            return redirect()->to('/login');
        }

        return view('masyarakat/home');
    }
    
}