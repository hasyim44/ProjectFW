<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Requests\JadwalRequest;

use App\Http\Requests;

use App\Keterangan;


class KeteranganController extends Controller
{
    public function awal ()
    {
    	// return "Hello dari keteranganController";
      return view('keterangan.awal',['data'=>Keterangan::all()]);
    }
    public function tambah()
   {
   	   // return $this->simpan();
      return view('keterangan.tambah');
   }
   public function simpan(Request $input)
   {
   	$keterangan = new Keterangan();
   	$keterangan->proses_lahir = $input->proses_lahir;
   	$informasi = $keterangan->save()? 'Berhasil simpan data': 'Gagal Simpan Data';
   	  return redirect ('keterangan') ->with (['Informasi'=>$informasi]);
   }
   public function edit($id)
   {
    $keterangan = Keterangan::find($id);
      return view('keterangan.edit')->with (array('keterangan'=>$keterangan));
   }
   public function lihat($id)
   {
    $keterangan = Keterangan::find($id);
      return view('keterangan.lihat')->with(array('keterangan'=>$keterangan));
    }
   public function update($id, Request $input)
   {
    $keterangan = Keterangan::find($id);
    $keterangan->proses_lahir = $input->proses_lahir;
    $informasi = $keterangan->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('keterangan') ->with (['Informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $keterangan = Keterangan::find($id);
    $informasi = $keterangan->delete()? 'Berhasil hapus data': 'Gagal hapus Data';
      return redirect ('keterangan') ->with (['informasi'=>$informasi]);
   }
}
