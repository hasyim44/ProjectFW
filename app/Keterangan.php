<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    protected $table = 'keterangan';
    protected $fillable = ['proses_lahir'];

    public function bayi()
	{
		return $this->hasMany(Bayi::class);
	}
}
