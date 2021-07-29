<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Contoller;

class Tagihansiswa extends BaseController
{
    public function index()
    {
        return view('Tagihansiswa/datatagihan');
    }
    public function editdata()
    {
        return view('Tagihansiswa/editdata');
    }
}
