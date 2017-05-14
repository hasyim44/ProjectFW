<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    protected $table = 'ibu';
    protected $fillable = ['nama','ttl','id_ayah','id_rekammedis'];
}
