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
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('phone');
            $table->string('area');
            $table->string('address');
            $table->string('province');
            $table->tinyInteger('personnel_size');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('employer');
    }
}
