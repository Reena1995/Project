<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeLocationHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_location_histories', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('name');
            $table->unsignedBigInteger('company_location_id');
            $table->unsignedBigInteger('company_location_type_id');
            $table->boolean('is_active')->default(1);
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->timestamps();


            $table->foreign('company_location_id')->references('id')->on('company_locations');
            $table->foreign('company_location_type_id')->references('id')->on('company_location_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_location_histories');
    }
}
