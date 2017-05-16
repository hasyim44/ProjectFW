<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\RekamMedisRequest;

use App\RekamMedis;

use App\Ibu;


class RekamMedisController extends Controller
{
    public function awal ()
    {
    	// return "Hello dari rekammedisController";
      return view('rekammedis.awal',['data'=>RekamMedis::all()]);
    }
    public function tambah()
   {
   	   // return $this->simpan();
      $ibu = new Ibu;
      return view('rekammedis.tambah',compact('ibu'));
   }
   public function simpan(Request $input)
   {
   	$rekammedis = new RekamMedis();
    $rekammedis->id_ibu = $input->id_ibu;
   	$rekammedis->tensi_darah = $input->tensi_darah;
   	$rekammedis->gula_darah = $input->gula_darah;
   	$rekammedis->kondisi = $input->kondisi;
   	$rekammedis->kolestrol = $input->kolestrol;
   	$informasi = $rekammedis->save()? 'Berhasil simpan data': 'Gagal Simpan Data';
   	  return redirect ('rekammedis') ->with (['Informasi'=>$informasi]);
   }
   public function edit($id)
   {
    $rekammedis = RekamMedis::find($id);
      return view('rekammedis.edit')->with (array('rekammedis'=>$rekammedis));
   }
   public function lihat($id)
   {
    $rekammedis = RekamMedis::find($id);
      return view('rekammedis.lihat')->with(array('rekammedis'=>$rekammedis));
    }
   public function update($id, Request $input)
   {
    $rekammedis = RekamMedis::find($id);
    $rekammedis->tensi_darah = $input->tensi_darah;
   	$rekammedis->gula_darah = $input->gula_darah;
   	$rekammedis->kondisi = $input->kondisi;
   	$rekammedis->kolestrol = $input->kolestrol;
    $informasi = $rekammedis->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('rekammedis') ->with (['Informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $rekammedis = RekamMedis::find($id);
    $informasi = $rekammedis->delete()? 'Berhasil hapus data': 'Gagal hapus Data';
      return redirect ('rekammedis') ->with (['informasi'=>$informasi]);
   }
}
