<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->string('paper_num');
            $table->string('c_tname')->nullable();
            $table->string('c_fname')->nullable();
            $table->string('c_lname')->nullable();
            $table->string('c_company')->nullable();
            $table->string('c_country')->nullable();
            $table->string('c_mobile')->nullable();
            $table->string('c_tel')->nullable();
            
            $table->string('p_tname')->nullable();
            $table->string('p_fname')->nullable();
            $table->string('p_lname')->nullable();
            $table->string('p_company')->nullable();
            $table->string('p_country')->nullable();
            $table->string('p_mobile')->nullable();
            $table->string('p_tel')->nullable();
            
            $table->text('p_biography')->nullable();
            
            $table->string('s_type')->nullable();
            $table->string('topic')->nullable();
            $table->text('title')->nullable();
            $table->text('abstracts')->nullable();

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
        Schema::dropIfExists('papers');
    }
}
