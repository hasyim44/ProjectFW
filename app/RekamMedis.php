<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = 'rekammedis';
    protected $fillable = ['tensi_darah','gila_darah','kondisi','kolestrol'];
    protected $guarded = ['id'];
    public function ibu()
	{
		return $this->belongsTo('App\Ibu','id_ibu');
	}
}
