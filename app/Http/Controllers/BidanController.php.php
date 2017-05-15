<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\BidanRequest;

use App\Bidan;


class BidanController extends Controller
{
    public function awal ()
    {
    	// return "Hello dari bidanController";
      return view('bidan.awal',['data'=>Bidan::all()]);
    }
    public function tambah()
   {
   	   // return $this->simpan();
      return view('bidan.tambah');
   }
   public function simpan(Request $input)
   {
   	$bidan = new Bidan();
   	$bidan->nama = $input->nama;
   	$bidan->tgl = $input->tgl;
   	$informasi = $bidan->save()? 'Berhasil simpan data': 'Gagal Simpan Data';
   	  return redirect ('bidan') ->with (['Informasi'=>$informasi]);
   }
   public function edit($id)
   {
    $bidan = Bidan::find($id);
      return view('bidan.edit')->with (array('bidan'=>$bidan));
   }
   public function lihat($id)
   {
    $bidan = Bidan::find($id);
      return view('bidan.lihat')->with(array('bidan'=>$bidan));
    }
   public function update($id, Request $input)
   {
    $bidan = Bidan::find($id);
    $bidan->nama = $input->nama;
    $bidan->tgl = $input->tgl;
    $informasi = $bidan->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('bidan') ->with (['Informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $bidan = Bidan::find($id); 
    $informasi = $bidan->delete()? 'Berhasil hapus data': 'Gagal hapus Data';
      return redirect ('bidan') ->with (['informasi'=>$informasi]);
   }}
