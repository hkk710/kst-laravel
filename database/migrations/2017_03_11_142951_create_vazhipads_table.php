<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVazhipadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vazhipads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('vtype');
            $table->string('prathishta');
            $table->string('vname');
            $table->integer('phone');
            $table->string('star');
            $table->string('email');
            $table->date('date');
            $table->string('price');
            $table->string('instamojo_id');
            $table->bloolean('prasadam')->default(false);
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
        Schema::dropIfExists('vazhipads');
    }
}
