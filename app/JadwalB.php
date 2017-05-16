<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalB extends Model
{
    protected $table = 'jadwal';
    protected $guarded = ['id'];

    public function bidan(){
    	return $this->belongsTo(bidan::class);
    }
    public function ruangan(){
    	return $this->belongsTo(ruangan::class);
    }
    public function bayi()
	{
		return $this->hasMany(bayi::class);
	}
}