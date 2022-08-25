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
        
           Schema::table('admins', function (Blueprint $table) {
             $table->string('name')->after('id');
			 $table->string('emailid')->after('name');
			 $table->string('mobileno')->after('emailid');
			 $table->string('img')->after('mobileno');
			 $table->string('username')->after('img');
			 $table->string('password')->after('username');
             $table->enum('status',['Block','Unblock'])->default('Unblock');
             
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            //
        });
    }
};
