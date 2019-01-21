<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Command extends Model
{
	// use SoftDeletes;
	// public static
	protected $table = 'command';

	protected $fillable = [
		'title',
		'lang',
		'text_html',
		'active',
	];

	// public function author()
	// {
	// 	return $this->hasOne(User::class);
	// }

	// public static function show($id, $title, $lang, $active)
	// {
	// 	$command = new static;
	// 	$command-> $id;
	// 	$command-> $title;
	// 	$command-> $lang;
	// 	$command-> $active;
	// 	$command-> save();
	//
	// 	return $command;
	// }
	//
	// public static function create($fields)
	// {
	// 	$command = new static;
	// 	$command-> title;
	// 	$command-> lang;
	// 	$command-> created_at;
	// 	$command-> updated_at;
	// 	$command-> active = 0;
	// 	$command-> save();
	//
	// 	return $command;
	// }
	//
	// public static function edit($fields){
	// 	$this-> fill($fields);
	// 	$this-> save();
	// }
	//
	// public static function remove($fields){
	// 	Storage::delete('uploade/commands/' . $this->image);
	// 	$this->delete();
	// }
	//
	// public function uploadImage($image, $table)
	// {
	// 	if($image == null){
	// 		return;
	// 	}
	// 	Storage::delete('uploade/commands/' . $this->image);
	// 	$filename = $id.'.'.$table.'.'.$image->extension();
	// 	$image->saveAs('uploade/commands', $filename);
	// 	$this->$table = $filename;
	// 	$this->save();
	// }
	//
	// public function getImage()
	// {
	// 	if($this->image == null){
	// 		return '/img/no-image.png';
	// 	}
	// 	return 'uploade/commands'. $this->image;
	// }
	//
	// public function activeStatus()
	// {
	// 	$this-> active = 1;
	// 	$this-> save();
	// }
	//
	// public function noactiveStatus()
	// {
	// 	$this-> active = 0;
	// 	$this-> save();
	// }
	//
	// public static function toggleStatus($value){
	// 	if($value == null){
	// 		return $this->activeStatus();
	// 	}
	//
	// 	return $this->noactiveStatus();
	// }
}
