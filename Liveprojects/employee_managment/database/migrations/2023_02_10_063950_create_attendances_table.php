<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('user_id');
			$table->date('attendance_date');
            $table->time('check_in');
            $table->time('check_out');
            $table->string('half_day');
            $table->string('last_check_in');
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
        Schema::dropIfExists('attendances');
    }
}
