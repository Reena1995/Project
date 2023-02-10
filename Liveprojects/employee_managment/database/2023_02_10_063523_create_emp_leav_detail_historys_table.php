<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpLeavDetailHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_leav_detail_historys', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->unsignedBigInteger('emp_leav_details_id');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('leave_type_id');
			$table->string('date_of_request');
            $table->string('leave_start_date');
            $table->string('leave_end_date');
            $table->string('no_of_days');
            $table->string('Half_day_date');
            $table->string('Return_date');
            $table->string('Leav_reason');
            $table->string('is_approved');
            $table->string('remarks');
            $table->string('is_cancelled');
			$table->boolean('is_active')->default(1);
			$table->string('created_by');
			$table->string('updated_by')->nullable();
            $table->timestamps();


            $table->foreign('emp_leav_details_id')->references('id')->on('emp_leav_details');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_leav_detail_historys');
    }
}
