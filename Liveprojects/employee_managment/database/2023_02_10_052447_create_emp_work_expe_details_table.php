<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpWorkExpeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_work_expe_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('user_id');
			$table->string('name');
            $table->longText('address');
            $table->date('date_of_joining');
            $table->date('date_of_leaving');
            $table->string('joining_Designation');
            $table->string('leaving_Designation');
            $table->string('role');
            $table->string('last_salary');
            $table->longText('leaving_reason');
            $table->string('reporting_authority_name');
            $table->integer('reporting_authority_contact');
            $table->string('reporting_authority_designation');
            $table->string('experience_certificate');
			$table->boolean('is_active')->default(1);
			$table->string('created_by');
			$table->string('updated_by')->nullable();
            $table->timestamps();


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
        Schema::dropIfExists('emp_work_expe_details');
    }
}
