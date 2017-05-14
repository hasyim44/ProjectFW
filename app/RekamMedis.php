<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = 'rekammedis';
    protected $fillable = ['tensi_darah','gila_darah','kondisi','kolestrol'];
}
