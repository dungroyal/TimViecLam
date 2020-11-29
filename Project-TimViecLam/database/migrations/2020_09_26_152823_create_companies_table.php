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
            $table->tinyInteger('personnel_size');
            $table->string('career');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->text('description')->nullable();
            $table->string('website')->nullable();
            $table->string('fax')->nullable();
            $table->string('logo')->nullable();
            $table->string('business_license')->nullable();
            $table->string('name_contact');
            $table->string('phone_contact');
            $table->string('email_contact');
            $table->string('address_contact');
            $table->string('servece')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
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
