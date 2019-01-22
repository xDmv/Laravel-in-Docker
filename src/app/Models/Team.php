<?php

declare(strict_types = 1);

namespace App\Models;

// use Carbon\Carbon;
// use Illuminate\Auth\Authenticatable;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Foundation\Auth\Access\Authorizable;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	// use Authenticatable, Authorizable, Notifiable, SoftDeletes;

	protected $table = 'team';

	protected $fillable = [
		'title',
		'lang',
		'img_display',
		'img_slider',
		'text_html',
		'active',
	];

	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }


}
