<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\BayiRequest;

use App\Bayi;


class BayiController extends Controller
{
    public function awal ()
    {
    	// return "Hello dari bayiController";
      return view('bayi.awal',['data'=>Bayi::all()]);
    }
    public function tambah()
   {
   	   // return $this->simpan();
      return view('bayi.tambah');
   }
   public function simpan(Request $input)
   {
   	$bayi = new Bayi();
   	$bayi->nama = $input->nama;
   	$bayi->ttl = $input->ttl;
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
    $bayi->ttl = $input->ttl;
    $informasi = $bayi->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('bayi') ->with (['Informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $bayi = Bayi::find($id);
    $informasi = $bayi->delete()? 'Berhasil hapus data': 'Gagal hapus Data';
      return redirect ('bayi') ->with (['informasi'=>$informasi]);
   }}
