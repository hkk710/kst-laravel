<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('star');
            $table->timestamps();
        });

        $stars = [
            'Ashwathi', 'Bharani', 'Karthika', 'Rohini', 'Makayeeram', 'Thiruvathira',
            'Punartham', 'Pooyam', 'Aaylliyam', 'Makam', 'Pooram', 'Utharam', 'Atham',
            'Chithira', 'Chothi', 'Vishakam', 'Anizham', 'Ketta', 'Moolam', 'Pooradam',
            'Utharadam', 'Thiruvonam', 'Avittam', 'Chathayam', 'Puroorttathi',
            'Uthrttathi', 'Revathi'
        ];

        foreach ($stars as $star) {
            DB::table('stars')->insert([
                'star' => $star
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stars');
    }
}
