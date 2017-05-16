<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bayi extends Model
{
    protected $table = 'bayi';
    protected $fillable = ['nama','id_ibu','id_ruangan','id_jadwal','id_keterangan'];

    public function ibu()
	{
		return $this->belongsTo('App\Ibu','id_ibu');
	}

	public function keterangan()
	{
		return $this->belongsTo('App\Keterangan','id_keterangan');
	}
	public function jadwal()
	{
		return $this->belongsTo('App\Jadwal','id_jadwal');
	}public function ruangan()
	{
		return $this->belongsTo('App\Ruangan','id_ruangan');
	}

}
