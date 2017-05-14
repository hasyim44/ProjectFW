<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableRekamMedis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RekamMedis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tensi_darah');
            $table->string('gula_darah');
            $table->string('kondisi');
            $table->string('kolestrol');
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
        Schema::drop('RekamMedis');
    }
}
