<?php

namespace App\Controllers;

class Pengaturan extends BaseController
{
    public function index()
    {
        return view('Pengaturan/pengaturanV');
    }
    public function editprofileuser()
    {
        return view('Pengaturan/editprofileuser');
    }
}
