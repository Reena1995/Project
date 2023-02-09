<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeJobProfileDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_job_profile_details', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('company_email');
            $table->string('company_employee_id');
            $table->string('company_emp_device_id');
            $table->unsignedBigInteger('departments_id');
            $table->unsignedBigInteger('designations_id');
            $table->unsignedBigInteger('organization_roles_id');
            $table->unsignedBigInteger('users_id');
            $table->boolean('is_active')->default(1);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('departments_id')->references('id')->on('departments');
            $table->foreign('designations_id')->references('id')->on('designations');
            $table->foreign('organization_roles_id')->references('id')->on('organization_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_job_profile_details');
    }
}
