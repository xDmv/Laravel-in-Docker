<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{

	public function up()
	{
		Schema::create('teams', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('lang', 2);
			$table->string('img_display')->nullable();
			$table->string('img_slider')->nullable();
			$table->text('text_html');
			$table->integer('active')->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('teams');
	}
}
