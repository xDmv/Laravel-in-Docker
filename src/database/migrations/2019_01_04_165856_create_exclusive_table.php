<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExclusiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exclusive', function (Blueprint $table) {
			$table->increments('id');
			$table->longText('title');
			$table->string('lang', 2);
			$table->string('img_display')->nullable();
			$table->string('img_slider')->nullable();
			$table->text('text_html');
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
        Schema::dropIfExists('exclusive');
    }
}
