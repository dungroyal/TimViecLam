<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesSuitableTable extends Migration
{
    public function up()
    {
        Schema::create('profiles_suitable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->integer('job_id')->unsigned();
            $table->integer('profiles_id')->unsigned();
        });

        Schema::table('profiles_suitable', function($table) {
            $table->foreign('employer_id')->references('id')->on('employer');
            $table->foreign('job_id')->references('id')->on('job');
            $table->foreign('profiles_id')->references('id')->on('profiles');
        });
    }

    public function down()
    {
        Schema::dropIfExists('profiles_suitable');
    }
}
