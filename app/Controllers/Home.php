<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('homepage');
	}
	public function tamplate()
	{
		return view('Layout/template');
	}
}
