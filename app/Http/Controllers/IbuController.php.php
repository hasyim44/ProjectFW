<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ibu;


class IbuController.php extends Controller
{
    public function awal ()
    {
    	// return "Hello dari ibuController";
      return view('ibu.awal',['data'=>Ibu::all()]);
    }
    public function tambah()
   {
   	   // return $this->simpan();
      return view('ibu.tambah');
   }
   public function simpan(Request $input)
   {
   	$ibu = new Ibu();
   	$ibu->nama = $input->nama;
   	$ibu->ttl = $input->ttl;
   	$informasi = $ibu->save()? 'Berhasil simpan data': 'Gagal Simpan Data';
   	  return redirect ('ibu') ->with (['Informasi'=>$informasi]);
   }
   public function edit($id)
   {
    $ibu = Ibu::find($id);
      return view('ibu.edit')->with (array('ibu'=>$ibu));
   }
   public function lihat($id)
   {
    $ibu = Ibu::find($id);
      return view('ibu.lihat')->with(array('ibu'=>$ibu));
    }
   public function update($id, Request $input)
   {
    $ibu = Ibu::find($id);
    $ibu->nama = $input->nama;
    $ibu->ttl = $input->ttl;
    $informasi = $ibu->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('ibu') ->with (['Informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $ibu = Ibu::find($id);
    $informasi = $ibu->delete()? 'Berhasil hapus data': 'Gagal hapus Data';
      return redirect ('ibu') ->with (['informasi'=>$informasi]);
   }
}
