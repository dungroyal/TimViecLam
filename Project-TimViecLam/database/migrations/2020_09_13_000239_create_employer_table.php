<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerTable extends Migration
{
    // Tạo table Nhà tuyển dụng
    public function up()
    {
        Schema::create('employer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_company');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->string('career');
            $table->string('address');
            $table->string('city');
            $table->tinyInteger('personnel_size');
            $table->string('name_contact');
            $table->string('phone');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('employer');
    }
}
