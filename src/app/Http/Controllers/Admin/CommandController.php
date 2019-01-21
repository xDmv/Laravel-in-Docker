<?php

namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
//use App\Models\Command;
use App\Models\User;


class CommandController extends AbstractController
{
	// public function index()
	// {
	// 	return view('admin.command.index',
	// ['command' =>  Command::all(),]);
	// }

	public function index(): View
	{
		//$command = Command::all();
		// $news = News::all();

		return view('admin.command.index',[
			'command' => User::all(),
		]);
	}
}
