<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdminColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
          $table->boolean('admin')->default(0)->after('id');
        });
        DB::table('users')->insert(
          ['admin' => 1, 'name' => 'Admin', 'email' => 'admin@kst.com', 'password' => bcrypt('krishna')]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('admin');
      });
    }
}
