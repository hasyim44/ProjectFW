<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jadwal', function (Blueprint $table) {
            $table->increments('id');
            $table->time('waktu_operasi');
            $table->date('tanggal');
            $table->integer('id_ruangan',false,true);
            $table->foreign('id_ruangan')->references('id')->on('Ruangan')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_bidan',false,true);
            $table->foreign('id_bidan')->references('id')->on('Bidan')->onDelete('cascade')->onUpdate('cascade');            
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
        Schema::drop('Jadwal');
    }
}
