<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paper_id')->constrained();
            $table->string('a_tname');
            $table->string('a_fname');
            $table->string('a_lname');
            $table->string('a_company');
            $table->string('a_country');
            $table->string('a_email');
            $table->string('a_c')->nullable();
            $table->string('a_p')->nullable();
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
        Schema::dropIfExists('authors');
    }
}
