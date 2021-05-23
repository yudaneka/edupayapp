<?php

namespace App\Controllers;

use App\Models\SekolahModel;

class Sekolah extends BaseController
{
    protected $sekolahModel;
    public function __construct()
    {
        $this->sekolahModel = new SekolahModel();
    }
    public function index()
    {
        $pager = \Config\Services::pager();
        //$sekolah = $this->sekolahModel->findAll();

        $data = [
            'title' => 'Daftar Sekolah',
            'sekolah' => $this->sekolahModel->paginate(2),
            'pager' => $this->sekolahModel->pager,
        ];
        //dd($sekolah);
        //$sekolahModel = new \App\Models\SekolahModel()
        //$sekolahModel = new SekolahModel();

        return view('sekolah/index', $data);
    }
}
