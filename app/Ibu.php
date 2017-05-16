<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    protected $table = 'ibu';
    protected $fillable = ['nama','ttl','id_ayah'];
    protected $guarded = ['id'];
    public function rekammedis()
	{
		return $this->hasMany('App\Rekammedis','id_rekammedis');
	}

	public function bayi()
	{
		return $this->hasMany('App\Bayi','id_bayi');
	}
	public function ayah()
	{
		return $this->belongsTo('App\Ayah', 'id_ayah');
	}
}
