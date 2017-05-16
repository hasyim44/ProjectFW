<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bayi extends Model
{
    protected $table = 'bayi';
    protected $fillable = ['nama','id_ibu','id_ruangan','id_jadwal','id_keterangan'];

    public function ibu()
	{
		return $this->belongsTo(Ibu::class);
	}

	public function keterangan()
	{
		return $this->belongsTo(Keterangan::class);
	}
	public function jadwalb()
	{
		return $this->belongsTo(jadwalb::class);
	}public function ruangan()
	{
		return $this->belongsTo(ruangan::class);
	}

}
