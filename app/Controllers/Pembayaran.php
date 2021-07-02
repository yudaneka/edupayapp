<?php

namespace App\Controllers;

class Pembayaran extends BaseController
{
    public function index()
    {
        return view('Pembayaran/pembayaranV');
    }

    public function tagihan()
    {
        return view('Pembayaran/tagihan');
    }

    public function detail()
    {
        return view('Pembayaran/detail');
    }

    public function detailbulan()
    {
        return view('Pembayaran/detailbulan');
    }
}
