<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpEmploymentDetailHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_employment_detail_histories', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('emp_employment_detail_id');
            $table->date('date_of_joining');
            $table->date('date_of_resigning')->nullable();
            $table->date('date_of_leaving')->nullable();
            $table->longText('reason_for')->nullable();
            $table->string('resign_letter_pdf')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->boolean('is_active')->default(1);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('emp_employment_detail_id')->references('id')->on('emp_employment_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_employment_detail_histories');
    }
}
