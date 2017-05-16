<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ibu;
use App\Ayah;

class IbuController extends Controller
{
   protected $informasi='Gagal aksi';
    public function awal ()
    {
    	// return "Hello dari ibuController";
      $semuaIbu= Ibu::all();
      return view('ibu.awal',compact('semuaIbu'));
    }
    public function tambah()
    {
        $ayah = new Ayah;
   	   return view('ibu.tambah', compact('ayah'));
    }
    public function simpan(Request $input)
    {
   	$ibu = new Ibu($input->only('id_ayah'));
    $ibu->nama  = $input->nama;
    $ibu->ttl  = $input->ttl;
   	  if ($ibu->save()) $this->informasi = "ibu Berhasil Di Simpan";
   	  return redirect('ibu')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id)
    {
        $ibu = Ibu::find($id);
        $ayah = new Ayah;
        return view('ibu.edit',compact('ibu','ayah'));
    }
    public function lihat($id)
    {
        $ibu = Ibu::find($id);
        return view('ibu.lihat',compact('ibu'));
    }
    public function update($id, Request $input)
    {
        $ibu = Ibu::find($id);
        $ibu->id_ayah = $input->id_ayah;
        $ibu->nama  = $input->nama;
        $ibu->ttl  = $input->ttl;
        $informasi = $ibu->save()? 'Berhasil Update Data' : 'Gagal Update Data';
       return redirect('ibu')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $ibu = Ibu::find($id);
        $informasi = $ibu->delete()? 'Berhasil Hapus Data':'Gagal Hapus Data';
       return redirect('ibu')->with(['informasi'=>$informasi]);
    }
}
