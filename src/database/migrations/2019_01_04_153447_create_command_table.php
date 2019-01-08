<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandTable extends Migration
{
	public function up()
	{
		Schema::create('command', function (Blueprint $table) {
			$table->increments('id');
			$table->longText('title');
			$table->string('lang', 2);
			$table->string('img_display');
			$table->string('img_slider');
			$table->text('text_html');
			$table->integer('active')->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		 Schema::dropIfExists('command');
	}
}
