<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Jadwal;

use App\Http\Requests;

use App\Jadwal;
use App\Ruangan;
use App\Bidan;

class JadwalController.php extends Controller
{
	protected $informasi='Gagal aksi';
    public function awal ()
    {
    	// return "Hello dari jadwalController";
      $semuaJadwalMatakuliah= Jadwal::all();
      return view('jadwal.awal',compact('semuaJadwalMatakuliah'));
    }
    public function tambah()
    {
        $bidan = new Bidan;
        $ruangan = new Ruangan;
   	   return view('jadwal.tambah', compact('bidan','ruangan'));
    }
    public function simpan(JadwalRequest $input)
    {
   	$jadwal = new Jadwal($input->only('id_ruangan','id_bidan'));
   	  if ($jadwal->save()) $this->informasi = "Jadwal bidan Berhasil Di Simpan";
   	  return redirect('jadwal')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id)
    {
        $jadwal = Jadwal::find($id);
        $bidan = new Bidan;
        $ruangan = new Ruangan;
        return view('jadwal.edit',compact('jadwal','bidan','ruangan'));
    }
    public function lihat($id)
    {
        $jadwal = Jadwal::find($id);
        return view('jadwal.lihat',compact('jadwal'));
    }
    public function update($id, jadwalRequest $input)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->id_ruangan = $input->id_ruangan;
        $jadwal->id_bidan = $input->id_bidan;
        $informasi = $jadwal->save()? 'Berhasil Update Data' : 'Gagal Update Data';
       return redirect('jadwal')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $jadwal = Jadwal::find($id);
        $informasi = $jadwal->delete()? 'Berhasil Hapus Data':'Gagal Hapus Data';
       return redirect('jadwal')->with(['informasi'=>$informasi]);
    }
    
}
