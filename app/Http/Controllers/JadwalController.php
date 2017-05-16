<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal;
use App\Ruangan;
use App\Bidan;

class JadwalController extends Controller
{
     protected $informasi='Gagal aksi';
    public function awal ()
    {
    	// return "Hello dari JadwalController";
      $semuaJadwal= Jadwal::all();
      return view('jadwal.awal',compact('semuaJadwal'));
    }
    public function tambah()
    {
        
        $ruangan = new Ruangan;
        $bidan = new bidan;
   	   return view('jadwal.tambah', compact('ruangan','bidan'));
    }
    public function simpan(Request $input)
    {
   	$jadwal = new Jadwal($input->only('ruangan_id','bidan_id'));
   	$jadwal->waktu_operasi=$input->waktu_operasi;
   	$jadwal->tanggal=$input->tanggal;
   	  if ($jadwal->save()) $this->informasi = "Jadwal Berhasil Di Simpan";
   	  return redirect('jadwal')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id)
    {
        $jadwal = Jadwal::find($id);
        $bidan = new bidan;
        $ruangan = new Ruangan;
        return view('jadwal.edit',compact('jadwal','ruangan','bidan','ruangan'));
    }
    public function lihat($id)
    {
        $jadwal = Jadwal::find($id);
        return view('jadwal.lihat',compact('jadwal'));
    }
    public function update($id, Request $input)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->ruangan_id = $input->ruangan_id;
        $jadwal->bidan_id = $input->bidan_id;
        $jadwal->waktu_operasi=$input->waktu_operasi;
   	$jadwal->tanggal=$input->tanggal;
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
