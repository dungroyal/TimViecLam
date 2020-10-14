<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->string('name');
            $table->integer('amount')->unsigned(); // amount: Mức lương
            $table->integer('type_job')->unsigned(); // type_job: Loại công việc (Bán thời gian, chính thức,...)
            $table->integer('career')->unsigned(); // Nghành nghề
            $table->integer('grade')->unsigned(); // grade: Cấp bậc (Nhân viên, trưởng phòng,...)
            $table->integer('salary')->unsigned(); // salary: Mức lương
            $table->integer('degree')->unsigned(); // Yêu cầu bằng cấp
            $table->integer('experience'); // Kinh ngiệm làm việc
            $table->string('work_location'); // work_location: Địa điểm làm việc
            $table->text('description');
            $table->text('job_requirements');
            $table->text('profile_request');
            $table->text('benefits');
            $table->date('deadline');
            $table->timestamps();
        });
        
        // Tạo khóa ngoại
        Schema::table('job', function($table) {
            $table->foreign('employer_id')->references('id')->on('employer');
            $table->foreign('amount')->references('id')->on('amount');
            $table->foreign('type_job')->references('id')->on('type_job');
            $table->foreign('career')->references('id')->on('career');
            $table->foreign('grade')->references('id')->on('grade');
            $table->foreign('salary')->references('id')->on('salary');
            $table->foreign('degree')->references('id')->on('degree');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('job');
    }
}
