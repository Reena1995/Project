<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpAssetDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_asset_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('asset_sub_type_id');
			$table->string('serial_no');
            $table->date('purchased_dn');
            $table->string('purchased_from');
            $table->string('warranty_period');
            $table->string('organization_asset_code');
            $table->string('invoice_no');
            $table->string('asset_image');
			$table->boolean('is_active')->default(1);
			$table->string('created_by');
			$table->string('updated_by')->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('brand_id')->references('id')->on('asset_brands');
            $table->foreign('asset_sub_type_id')->references('id')->on('asset_sub_types');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_asset_details');
    }
}
