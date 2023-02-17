<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpLangDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_lang_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('language_id');
            $table->string('read');
            $table->string('write');
            $table->string('speak');
            $table->unsignedBigInteger('user_id');
			$table->boolean('is_active')->default(1);
			$table->string('created_by');
			$table->string('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_lang_details');
    }
}
