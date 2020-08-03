<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('u_tname');
            $table->string('u_fname');
            $table->string('u_lname');
            $table->string('u_company');
            $table->string('u_country');
            $table->string('u_department')->nullable();
            $table->string('u_position')->nullable();
            $table->string('u_address')->nullable();
            $table->string('u_mobile');
            $table->string('u_tel');
            $table->string('u_level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
