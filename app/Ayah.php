<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    protected $table = 'ayah';
    protected $fillable = ['nama','ttl'];
    protected $guarded = ['id'];
    public function ibu()
	{
		return $this->hasOne(Ibu::class);
	}
}
