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
            $table->string('experience');
            $table->date('birthday');
            $table->text('cover_letter');
            $table->string('resume');
            $table->string('avatar');
            $table->timestamps();
        });

        // Tạo khóa ngoại
        Schema::table('profiles', function($table) {
            $table->foreign('job_seeker_id')->references('id')->on('job_seeker');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
