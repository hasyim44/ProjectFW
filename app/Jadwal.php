<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['waktu_operasi','tanggal','id_ruangan','id_bidan'];
}
