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

    public function laporan_anda()
    {
        return view('/masyarakat/Laporan_anda');
    }

    public function About_us()
    {
        return view('/masyarakat/About_us');
    }

    public function Profile()
    {
        return view('/masyarakat/Profile');
    }

    public function complete()
    {
        return view('/masyarakat/Complete');
    }
    
}