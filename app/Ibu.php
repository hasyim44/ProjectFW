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
		return $this->hasMany(RekamMedis::class);
	}

	public function bayi()
	{
		return $this->hasMany(Bayi::class);
	}
	public function ayah()
	{
		return $this->belongsTo(Ayah::class);
	}
}
