<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    // Profile cá nhân của người tìm việc
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_seeker_id')->unsigned();
            $table->string('address');
            $table->tinyInteger('gender');
            $table->tinyInteger('marital_status');
            $table->date('birthday');
            $table->text('cover_letter');
            $table->string('resume');
            $table->string('avatar');
            $table->integer('type_job_id')->unsigned();
            $table->integer('career_id')->unsigned();
            $table->integer('grade_id')->unsigned();
            $table->integer('salary_id')->unsigned();
            $table->integer('degree_id')->unsigned();
            $table->integer('experience_id')->unsigned();
            $table->string('work_location',50);
            $table->string('servece')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();
        });
        
        // Tạo khóa ngoại
        // Schema::table('profiles', function($table) {
        //     $table->foreign('job_seeker_id')->references('id')->on('job_seeker');
        //     $table->foreign('type_job_id')->references('id')->on('type_job');
        //     $table->foreign('career_id')->references('id')->on('career');
        //     $table->foreign('grade_id')->references('id')->on('grade');
        //     $table->foreign('salary_id')->references('id')->on('salary');
        //     $table->foreign('degree_id')->references('id')->on('degree');
        //     $table->foreign('experience_id')->references('id')->on('experience');
        // });
    }
    
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
