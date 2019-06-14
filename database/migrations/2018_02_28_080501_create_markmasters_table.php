<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markmasters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session');
            $table->string('class');
            $table->string('stream');
            $table->string('exam');
            $table->string('subject');
            $table->integer('mmth'); // Max marks in theory
            $table->integer('pmth'); // Pass marks in theory
            $table->integer('mmpr'); // Max marks in practical
            $table->integer('pmpr'); //Pass marks in practical
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
        Schema::dropIfExists('markmasters');
    }
}
