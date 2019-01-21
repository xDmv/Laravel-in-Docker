<?php

//declare(strict_types = 1);

namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class DashboardController
{

	public function index()
	{
		return view('admin.dashboard');
	}
}
