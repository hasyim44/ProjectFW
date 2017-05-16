<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Admin;

use Illuminate\Auth\SessionGuard;

use Auth;
use Validator;

class SessiController extends Controller
{

public function index()
	{
		return view('master_admin');
	}
	public function form()
	{
		if(Auth::check()){
			return redirect('/');
		}
		return view('login');
	}
	public function validasi(Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
		]);
		$admin = Admin::where($input->only('username','password'))->first();
		if(! is_null($admin)){
				Auth::login($admin);
				if(Auth::check())
					return redirect('/')->with('informasi',"Selamat datang ".Auth::user()->username);
				}
					return redirect('/login')->withErrors(['admin tidak ditemukan']);
		}
		public function logout()
		{
			if(Auth::check()){
					Auth::logout();
					return redirect('/login')->withErrors(['Silahkan login untuk masuk ke sistem']);
			}else{
					return redirect('/login')->withErrors(['Silahkan login terlebih dahulu']);
			}
	}	
}

