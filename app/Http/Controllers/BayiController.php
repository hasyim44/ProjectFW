<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\BayiRequest;

use App\Bayi;
use App\Ibu;
use App\ruangan;
use App\jadwalb;
use App\keterangan;
class BayiController extends Controller
{
    public function awal ()
    {
    	// return "Hello dari BayiController";
      $semuaBayi= Bayi::all();
      return view('bayi.awal',compact('semuaBayi'));
    }
    public function tambah()
   {
   	  $ibu = new ibu;
      $jadwalb = new jadwalb;
      $ruangan = new ruangan;
      $keterangan = new keterangan;
      return view('bayi.tambah', compact('ibu','ruangan','jadwalb','keterangan'));
   }
   public function simpan(Request $input)
   {
   	$bayi = new Bayi();
   	$bayi->nama = $input->nama;
   	$bayi->id_jadwal = $input->id_jadwal;
    $bayi->id_ibu = $input->id_ibu;
    $bayi->id_ruangan = $input->id_ruangan;
    $bayi->id_keterangan = $input->id_keterangan;
   	$informasi = $bayi->save()? 'Berhasil simpan data': 'Gagal Simpan Data';
   	  return redirect ('bayi') ->with (['Informasi'=>$informasi]);
   }
   public function edit($id)
   {
    $bayi = Bayi::find($id);
      return view('bayi.edit')->with (array('bayi'=>$bayi));
   }
   public function lihat($id)
   {
    $bayi = Bayi::find($id);
      return view('bayi.lihat')->with(array('bayi'=>$bayi));
    }
   public function update($id, Request $input)
   {
    $bayi = Bayi::find($id);
    $bayi->nama = $input->nama;
    $bayi->id_jadwal = $input->id_jadwal;
    $informasi = $bayi->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('bayi') ->with (['Informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $bayi = Bayi::find($id);
    $informasi = $bayi->delete()? 'Berhasil hapus data': 'Gagal hapus Data';
      return redirect ('bayi') ->with (['informasi'=>$informasi]);
   }}
