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
        Schema::table('patients', function (Blueprint $table) {

            $table->string('name')->after('id');
            $table->string('mobileno')->default('null')->after('name');
            $table->string('email')->after('mobileno');
            $table->string('password')->after('email');
            $table->string('confirmpwd')->after('password');
            $table->string('gender')->default('null')->after('confirmpwd');
            $table->string('ptprofile_img')->default('null')->after('gender');
            $table->enum('status',['Block','Unblock'])->default('Unblock')->after('ptprofile_img');
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
        Schema::table('patients', function (Blueprint $table) {
            //
        });
    }
};
