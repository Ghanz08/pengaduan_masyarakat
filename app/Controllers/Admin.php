<?php

namespace App\Controllers;

class Admin extends BaseController
{
    
    public function __construct()
    {
        $this->session = session();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        
        // cek username jika user dari session
        if($this->session->get('nik') != 1){
            return redirect()->to('/user');
        }
        
        return view('home/index');
        
    }
    
}