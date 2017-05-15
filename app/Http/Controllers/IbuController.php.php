<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\IbuRequest;

use App\Ibu;
use App\Ayah;
use App\RekamMedis;

class IbuController extends Controller
{
   protected $informasi='Gagal aksi';
    public function awal ()
    {
    	// return "Hello dari ibuController";
      $semuaJadwal= Ibu::all();
      return view('ibu.awal',compact('semuaibu'));
    }
    public function tambah()
    {
        $ayah = new Ayah;
        $rekammedis = new RekamMedis;
   	   return view('ibu.tambah', compact('ayah','rekammedis'));
    }
    public function simpan(IbuRequest $input)
    {
   	$ibu = new Ibu($input->only('id_rekammedis','id_ayah'));
   	  if ($ibu->save()) $this->informasi = "ibu Berhasil Di Simpan";
   	  return redirect('ibu')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id)
    {
        $ibu = Ibu::find($id);
        $ayah = new Ayah;
        $rekammedis = new RekamMedis;
        return view('ibu.edit',compact('ibu','ayah','rekammedis'));
    }
    public function lihat($id)
    {
        $ibu = Ibu::find($id);
        return view('ibu.lihat',compact('ibu'));
    }
    public function update($id, ibuRequest $input)
    {
        $ibu = Ibu::find($id);
        $ibu->id_rekammedis = $input->id_rekammedis;
        $ibu->id_ayah = $input->id_ayah;
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
