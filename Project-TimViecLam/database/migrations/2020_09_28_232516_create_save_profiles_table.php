<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaveProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('save_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->integer('job_id')->unsigned();
            $table->integer('profiles_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('save_profiles', function($table) {
            $table->foreign('job_id')->references('id')->on('job');
            $table->foreign('profiles_id')->references('id')->on('profiles');
            $table->foreign('employer_id')->references('id')->on('employer');
        });
    }

    public function down()
    {
        Schema::dropIfExists('save_profiles');
    }
}
