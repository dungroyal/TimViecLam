<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaveJobTable extends Migration
{
    public function up()
    {
        Schema::create('save_job', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_seeker_id')->unsigned();
            $table->integer('job_id')->unsigned();
            $table->timestamps();
        });

        // Schema::table('save_job', function($table) {
        //     $table->foreign('job_id')->references('id')->on('job');
        //     $table->foreign('job_seeker_id')->references('id')->on('job_seeker');
        // });
    }

    public function down()
    {
        Schema::dropIfExists('save_job');
    }
}
