<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Admin;

class AdminController extends Controller
{
	public function awal ()
    {
      return view('admin.awal',['data'=>Admin::all()]);
    }
    public function tambah()
   {
   	   // return $this->simpan();
      return view('admin.tambah');
   }
   public function simpan(Request $input)
   {
    $this->validate($input,[
        'username'=>'required',
        'password'=>'required',
      ]);
   	$admin = new Admin();
   	$admin->username = $input->username;
   	$admin->password = $input->password;
   	$informasi = $admin->save()? 'Berhasil simpan data': 'Gagal Simpan Data';
   	  return redirect ('admin') ->with (['Informasi'=>$informasi]);
   }
   public function edit($id)
   {
    $admin = admin::find($id);
      return view('admin.edit')->with (array('admin'=>$admin));
   }
   public function lihat($id)
   {
    $admin = admin::find($id);
      return view('admin.lihat')->with(array('admin'=>$admin));
    }
   public function update($id, Request $input)
   {
    $admin = Admin::find($id);
    $admin->username = $input->username;
    $admin->password = $input->password;
    $informasi = $admin->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('admin') ->with (['Informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $admin = admin::find($id);
    $informasi = $admin->delete()? 'Berhasil hapus data': 'Gagal hapus Data';
      return redirect ('admin') ->with (['informasi'=>$informasi]);
   }
    
}
