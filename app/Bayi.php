<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bayi extends Model
{
    protected $table = 'bayi';
    protected $fillable = ['nama','id_ibu','id_ruangan','id_jadwal','id_keterangan'];
}
