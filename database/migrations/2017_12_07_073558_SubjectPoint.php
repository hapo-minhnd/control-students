<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubjectPoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up()
    {
        Schema::create('subject_point', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_student');
            $table->string('name');
            $table->string('code_subject');
            $table->string('point');
            $table->rememberToken();
            $table->timestamps();
        });
    }*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_point');

    }
}
