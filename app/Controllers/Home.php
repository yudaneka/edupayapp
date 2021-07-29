<?php

namespace App\Controllers;

use App\Models\SekolahModel;

class Home extends BaseController
{
	protected $sekolahModel;
	public function __construct()
	{
		$this->sekolahModel = new SekolahModel();
	}

	public function index()
	{
		return view('auth/login');
	}
	public function detail($slug)
	{
		// echo $slug;
		// $sekolah=$this->sekolahModel->where(['slug'=>$slug])->first();
		$data = [
			'title' => 'Detail Sekolah',
			'sekolah' => $this->sekolahModel->getSekolah($slug)
		];
		if (empty($data['sekolah'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Sekolah' . $slug . ' tidak 
                    terdaftar.');
		}

		return view('sekolah/detail', $data);
	}

	public function template()
	{
		return view('Layout/template');
	}


	public function midtrans()
	{
		return view('midtrans/transaski');
	}
}
