<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVnamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vnames', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('vtypes_id')->unsigned();
            $table->foreign('vtypes_id')->references('id')->on('vtypes');
            $table->integer('price');
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
        Schema::dropIfExists('vnames');
    }
}
