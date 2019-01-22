<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Team;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
		// $team -> Team::all();

        return view('admin.dashboard');
    }
}
