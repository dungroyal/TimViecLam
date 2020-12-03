<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_code')->unique()->comment('Chuổi 5 kí tự (Số + chữ) không được trùng');
            $table->integer('company_id')->unsigned();
            $table->integer('employer_id')->unsigned();
            $table->string('name_job');
            $table->integer('type_job_id')->unsigned(); // type_job: Loại công việc (Bán thời gian, chính thức,...)
            $table->integer('amount')->comment('1,2 or 3');
            $table->integer('career_id')->unsigned(); // Nghành nghề
            $table->integer('grade_id')->unsigned(); // grade: Cấp bậc (Nhân viên, trưởng phòng,...)
            $table->integer('salary_id')->unsigned(); // salary: Mức lương
            $table->integer('degree_id')->unsigned(); // Yêu cầu bằng cấp
            $table->integer('experience_id')->unsigned(); // Kinh ngiệm làm việc
            $table->string('address'); // Kinh ngiệm làm việcaddress
            $table->integer('city')->unsigned(); // work_location: Địa điểm làm việc
            $table->text('description');
            $table->text('job_requirements');
            $table->tinyInteger('sex_requirements')->comment('0,1 or 2');
            $table->text('profile_request');
            $table->text('benefits');
            $table->string('name_contact');
            $table->string('phone_contact');
            $table->string('address_contact');
            $table->string('email_contact');
            $table->date('deadline')->comment('Ít hơn 90Day');
            $table->string('slug');
            $table->tinyInteger('status')->comment('0: disable, 1 active, 2 viêc làm hot, 3 việc làm gấp');
            $table->timestamps();
        });
        
        // Tạo khóa ngoại
        // Schema::table('job', function($table) {
        //     $table->foreign('employer_id')->references('id')->on('employer');
        //     $table->foreign('company_id')->references('id')->on('companies');
        //     $table->foreign('type_job_id')->references('id')->on('type_job');
        //     $table->foreign('career_id')->references('id')->on('career');
        //     $table->foreign('grade_id')->references('id')->on('grade');
        //     $table->foreign('salary_id')->references('id')->on('salary');
        //     $table->foreign('degree_id')->references('id')->on('degree');
        //     $table->foreign('experience_id')->references('id')->on('experience');
        //     $table->foreign('city_id')->references('id')->on('city');
        // });
    }
    
    public function down()
    {
        Schema::dropIfExists('job');
    }
}
