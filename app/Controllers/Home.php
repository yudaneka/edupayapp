<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('Home Page/homepage');
	}
	public function template()
	{
		return view('Layout/template');
	}
}
