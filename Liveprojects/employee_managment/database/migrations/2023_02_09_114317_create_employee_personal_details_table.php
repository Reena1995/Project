<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->unsignedBigInteger('user_id');
            $table->string('dob');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('image');
            $table->string('mobile');
            $table->string('alternate_no');
            $table->string('blood_group');
            $table->unsignedBigInteger('current_residence_type_id');
            $table->string('deatils_of_disability');
            $table->string('total_of_experience');

            $table->string('current_address');
            $table->unsignedBigInteger('current_country_id');
            $table->unsignedBigInteger('current_state_id');
            $table->unsignedBigInteger('current_city_id');
            $table->string('current_pincode');

            $table->string('permanent_address');
            $table->unsignedBigInteger('permanent_country_id');
            $table->unsignedBigInteger('permanent_state_id');
            $table->unsignedBigInteger('permanent_city_id');
            $table->string('permanent_pincode');

            $table->unsignedBigInteger('mode_of_transportations_id');
            $table->unsignedBigInteger('users_id');
            $table->boolean('is_active')->default(1);
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->timestamps();


            $table->foreign('current_residence_type_id')->references('id')->on('current_residence_types');
            $table->foreign('mode_of_transportations_id')->references('id')->on('mode_of_transportations');
            $table->foreign('users_id')->references('id')->on('users');

            $table->foreign('current_country_id')->references('id')->on('countries');
            $table->foreign('current_state_id')->references('id')->on('states');
            $table->foreign('current_city_id')->references('id')->on('cities');

            $table->foreign('permanent_country_id')->references('id')->on('countries');
            $table->foreign('permanent_state_id')->references('id')->on('states');
            $table->foreign('permanent_city_id')->references('id')->on('cities');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_personal_details');
    }
}
