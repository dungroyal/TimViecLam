<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobSuitableTable extends Migration
{
    public function up()
    {
        Schema::create('job_suitable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->integer('profiles_id')->unsigned();
        });

        Schema::table('job_suitable', function($table) {
            $table->foreign('profiles_id')->references('id')->on('profiles');
            $table->foreign('job_id')->references('id')->on('job');
        });
    }
    public function down()
    {
        Schema::dropIfExists('job_suitable');
    }
}
