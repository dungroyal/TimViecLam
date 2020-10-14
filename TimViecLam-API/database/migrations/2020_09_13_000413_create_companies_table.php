<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    // Tạo table công ty của nhà tuyển dụng
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->string('name');
            $table->string('slogan');
            $table->text('description');
            $table->string('website');
            $table->string('fax');
            $table->string('business_license');
            $table->tinyInteger('marital_status');
            $table->string('logo');
            $table->string('cover_photo');
        });
        
        // Tạo khóa ngoại
        Schema::table('companies', function($table) {
            $table->foreign('employer_id')->references('id')->on('employer');
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
