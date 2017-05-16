<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\AyahRequest;

use App\Ayah;

class AyahController extends Controller
{
    public function awal ()
    {
    	// return "Hello dari ayahController";
      return view('ayah.awal',['data'=>Ayah::all()]);
    }
    public function tambah()
   {
   	   // return $this->simpan();
      return view('ayah.tambah');
   }
   public function simpan(Request $input)
   {
   	$ayah = new Ayah();
   	$ayah->nama = $input->nama;
   	$ayah->ttl = $input->ttl;
   	$informasi = $ayah->save()? 'Berhasil simpan data': 'Gagal Simpan Data';
   	  return redirect ('ayah') ->with (['Informasi'=>$informasi]);
   }
   public function edit($id)
   {
    $ayah = Ayah::find($id);
      return view('ayah.edit')->with (array('ayah'=>$ayah));
   }
   public function lihat($id)
   {
    $ayah = Ayah::find($id);
      return view('ayah.lihat')->with(array('ayah'=>$ayah));
    }
   public function update($id, Request $input)
   {
    $ayah = Ayah::find($id);
    $ayah->nama = $input->nama;
    $ayah->ttl = $input->ttl;
    $informasi = $ayah->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('ayah') ->with (['Informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $ayah = Ayah::find($id);
    $informasi = $ayah->delete()? 'Berhasil hapus data': 'Gagal hapus Data';
      return redirect ('ayah') ->with (['informasi'=>$informasi]);
   }
}
