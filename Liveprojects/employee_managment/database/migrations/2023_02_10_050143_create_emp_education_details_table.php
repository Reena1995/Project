<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_education_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('edu_level_id');
            $table->unsignedBigInteger('med_inst_id');
			$table->string('university_name');
            $table->string('percentage');
            $table->string('specilaization');
            $table->integer('passing_year');
			$table->boolean('is_active')->default(1);
			$table->string('created_by');
			$table->string('updated_by')->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('edu_level_id')->references('id')->on('education_levels');
            $table->foreign('med_inst_id')->references('id')->on('medium_of_instructions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_education_details');
    }
}
