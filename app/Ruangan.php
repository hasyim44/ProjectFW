<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';
    // protected $fillable = ['nama'];
    protected $guarded = ['id'];
    public function jadwalb()
	{
		return $this->hasMany(jadwalb::class);
	}
	public function ruangan()
	{
		return $this->hasMany(ruangan::class);
	}
}
