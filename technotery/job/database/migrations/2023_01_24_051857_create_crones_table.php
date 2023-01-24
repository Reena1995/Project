<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCronesTable extends Migration
{
   
    public function up()
    {
        Schema::create('crones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('image');
            $table->string('mobile');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crones');
    }
}
