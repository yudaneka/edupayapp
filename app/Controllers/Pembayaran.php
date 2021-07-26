<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Contoller;

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

    public function paymentgateway()
    {
        return view('midtrans/checkout_snap');
    }

    protected function initPaymentGateway()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    }
}
