<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servises', function (Blueprint $table) {
			$table->increments('id');
			$table->longText('title');
			$table->longText('title_md5')->unique();
			$table->string('lang', 2);
			$table->string('img_display');
			$table->string('img_slider');
			$table->text('text_about');
			$table->json('prise_json');
			$table->integer('prices_count');
			$table->integer('active')->default(0);
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servises');
    }
}
