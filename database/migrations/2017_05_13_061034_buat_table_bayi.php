<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableBayi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bayi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('id_ruangan',false,true);
            $table->foreign('id_ruangan')->references('id')->on('Ruangan')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_jadwal',false,true);
            $table->foreign('id_jadwal')->references('id')->on('Jadwal')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_keterangan',false,true);
            $table->foreign('id_keterangan')->references('id')->on('Keterangan')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('Bayi');
    }
}
