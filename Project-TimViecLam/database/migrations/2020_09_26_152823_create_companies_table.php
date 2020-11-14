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
            $table->string('name_company');
            $table->tinyInteger('personnel_size')->nullable();
            $table->string('career')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->text('description')->nullable();
            $table->string('website')->nullable();
            $table->string('fax')->nullable();
            $table->string('logo')->nullable();
            $table->string('business_license')->nullable();
            $table->string('name_contact')->nullable();
            $table->string('phone_contact')->nullable();
            $table->string('email_contact')->nullable();
            $table->string('address_contact')->nullable();
            $table->integer('status')->nullable();
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
