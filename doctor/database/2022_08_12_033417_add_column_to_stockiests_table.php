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
        Schema::table('stockiests', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->after('id');
            $table->unsignedBigInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('healthmanagers')->after('company_id');
            $table->string('name')->after('manager_id');
            $table->unsignedBigInteger('state');
            $table->foreign('state')->references('id')->on('states')->after('name');
            $table->unsignedBigInteger('city');
            $table->foreign('city')->references('id')->on('cities')->after('state');
            $table->unsignedBigInteger('area');
            $table->foreign('area')->references('id')->on('areas')->after('city');
            $table->string('address')->after('area');
            $table->string('pincode')->after('address');
			$table->enum('status',['UnBlock','Block'])->default('UnBlock')->after('pincode');
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
        Schema::table('stockiests', function (Blueprint $table) {
            //
        });
    }
};
