<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatePdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_pdfs', function (Blueprint $table) {
            $table->id();
            $table->string('mode');
            $table->string('format');
            $table->string('margin_header');
            $table->string('margin_top');
            $table->string('margin_bottom');
            $table->string('margin_footer');
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
        Schema::dropIfExists('create_pdfs');
    }
}
