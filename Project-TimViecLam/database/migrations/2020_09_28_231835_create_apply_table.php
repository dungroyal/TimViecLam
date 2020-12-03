<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyTable extends Migration
{
    public function up()
    {
        Schema::create('apply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->integer('job_seeker_id')->unsigned();
            $table->integer('employer_id')->unsigned();
            $table->tinyInteger('status');
            $table->timestamps();
        });

        // Schema::table('apply', function($table) {
        //     $table->foreign('job_id')->references('id')->on('job');
        //     $table->foreign('profiles_id')->references('id')->on('profiles');
        // });
    }

    public function down()
    {
        Schema::dropIfExists('apply');
    }
}
