<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePersonalDetailHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_personal_detail_histories', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->unsignedBigInteger('emp_per_details_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('image')->nullable();
            $table->string('mobile')->nullable();
            $table->string('alternate_no')->nullable();
            $table->string('blood_group')->nullable();
            $table->unsignedBigInteger('current_residence_type_id')->nullable();
            $table->string('deatils_of_disability')->nullable();
            $table->string('total_of_experience')->nullable();

            $table->longText('current_address')->nullable();
            $table->unsignedBigInteger('current_country_id')->nullable();
            $table->unsignedBigInteger('current_state_id')->nullable();
            $table->unsignedBigInteger('current_city_id')->nullable();
            $table->string('current_pincode')->nullable();

            $table->longText('permanent_address');
            $table->unsignedBigInteger('permanent_country_id')->nullable();
            $table->unsignedBigInteger('permanent_state_id')->nullable();
            $table->unsignedBigInteger('permanent_city_id')->nullable();
            $table->string('permanent_pincode')->nullable();

            $table->unsignedBigInteger('mode_of_transportations_id')->nullable();
            $table->unsignedBigInteger('users_id')->nullable();
            $table->boolean('is_active')->default(1);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();



            $table->foreign('emp_per_details_id')->references('id')->on('employee_personal_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_personal_detail_histories');
    }
}
