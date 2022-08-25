
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
        Schema::table('customers', function (Blueprint $table) {
           $table->string('name')->after('id');
		   $table->string('gender')->after('name');
		   $table->string('img')->after('gender');
		   $table->string('email')->after('img');
		   $table->string('mobile')->after('email');
		   $table->string('username')->after('mobile');
		   $table->string('password')->after('username');
		   $table->string('confirmpwd')->after('password');
		   $table->enum('status',['Block','Unblock'])->default('Unblock')->after('confirmpwd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
        });
    }
};
