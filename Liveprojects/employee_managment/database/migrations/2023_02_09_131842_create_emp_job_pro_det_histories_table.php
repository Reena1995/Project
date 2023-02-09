<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpJobProDetHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_job_pro_det_histories', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->unsignedBigInteger('emp_job_profile_id');
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

            $table->foreign('emp_job_profile_id')->references('id')->on('employee_job_profile_details');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_job_pro_det_histories');
    }
}
