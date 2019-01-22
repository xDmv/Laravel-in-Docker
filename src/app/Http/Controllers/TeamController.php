<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('admin.command.index');
		return view('home');
		// return view('admin.command.index'[
		// 	'team' => Team::all(),
		// ]);
	}
}
