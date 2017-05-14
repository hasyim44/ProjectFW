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
        Schema::create('bayi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('id_ibu',false,true);
            $table->foreign('id_ibu')->references('id')->on('ibu')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_ruangan',false,true);
            $table->foreign('id_ruangan')->references('id')->on('ruangan')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_jadwal',false,true);
            $table->foreign('id_jadwal')->references('id')->on('jadwal')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_keterangan',false,true);
            $table->foreign('id_keterangan')->references('id')->on('keterangan')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('bayi');
    }
}
