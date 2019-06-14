<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session');
            $table->string('class');
            $table->string('section');
            $table->string('stream');
            $table->string('name');
            $table->string('gender');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('phone');
            $table->string('email');
            $table->string('religion');
            $table->string('category');
            $table->string('state');
            $table->string('city');
            $table->date('dor');
            $table->date('dob');
            $table->string('rollno');
            $table->string('address');
            $table->string('status');
            $table->string('father_occupation');
            $table->string('photo');
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
        Schema::dropIfExists('students');
    }
}
