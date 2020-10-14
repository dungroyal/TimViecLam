<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerTable extends Migration
{
    public function up()
    {
        Schema::create('career', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('career');
    }
}
