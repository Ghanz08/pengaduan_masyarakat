<?php

namespace App\Controllers;

class Masyarakat extends BaseController
{
    
    public function __construct()
    {
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
    
}