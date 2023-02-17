<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpProTraDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_pro_tra_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('user_id');
			$table->string('name_of_institute');
            $table->longText('address');
            $table->date('to');
            $table->date('from');
            $table->longText('description');
            $table->string('certificate_pdf');
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
        Schema::dropIfExists('emp_pro_tra_details');
    }
}
