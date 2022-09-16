<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mrs', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->after('id');
			$table->unsignedBigInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('healthmanagers')->after('company_id');
            $table->string('company_name')->after('manager_id');
            $table->string('first_name')->after('company_name');
            $table->string('last_name')->after('first_name');
            $table->string('email')->after('last_name');
            $table->string('password')->after('email');
            $table->string('profile_img')->after('password');
            $table->string('visiting_card')->after('profile_img');
			
            $table->enum('status',['Block','Unblock'])->default('Unblock')->after('visiting_card');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mrs', function (Blueprint $table) {
            //
        });
    }
};
