<?php
Route::get('/login','SessiController@form');
Route::post('/login','SessiController@validasi');
Route::get('/logout','SessiController@logout');
Route::get('/','SessiController@index');
Route::group(['middleware'=>'AutentifikasiUser'],function()
{
Route::get('admin','Admin@awal');
Route::get('admin/tambah','AdminController@tambah');
Route::post('admin/simpan','AdminController@simpan');
Route::get('admin/edit/{admin}','AdminController@edit');
Route::post('admin/edit/{admin}','AdminController@update');
Route::get('admin/hapus/{admin}','AdminController@hapus');
Route::get('admin/lihat/{admin}','AdminController@lihat');

Route::get('ayah','AyahController@awal');
Route::get('ayah/tambah','AyahController@tambah');
Route::post('ayah/simpan','AyahController@simpan');
Route::get('ayah/edit/{ayah}','AyahController@edit');
Route::post('ayah/edit/{ayah}','AyahController@update');
Route::get('ayah/hapus/{ayah}','AyahController@hapus');
Route::get('ayah/lihat/{ayah}','AyahController@lihat');

Route::get('bayi','BayiController@awal');
Route::get('bayi/tambah','BayiController@tambah');
Route::post('bayi/simpan','BayiController@simpan');
Route::get('bayi/edit/{bayi}','BayiController@edit');
Route::post('bayi/edit/{bayi}','BayiController@update');
Route::get('bayi/hapus/{bayi}','BayiController@hapus');
Route::get('bayi/lihat/{bayi}','BayiController@lihat');

Route::get('bidan','BidanController@awal');
Route::get('bidan/tambah','BidanController@tambah');
Route::get('bidan/{bidan}','BidanController@lihat');
Route::post('bidan/simpan','BidanController@simpan');
Route::get('bidan/edit/{bidan}','BidanController@edit');
Route::post('bidan/edit/{bidan}','BidanController@update');
Route::get('bidan/hapus/{bidan}','BidanController@hapus');
Route::get('bidan/lihat/{bidan}','BidanController@lihat');


Route::get('ibu','IbuController@awal');
Route::get('ibu/tambah','IbuController@tambah');
Route::get('ibu/{ibu}','IbuController@lihat');
Route::post('ibu/simpan','IbuController@simpan');
Route::get('ibu/edit/{ibu}','IbuController@edit');
Route::post('ibu/edit/{ibu}','IbuController@update');
Route::get('ibu/hapus/{ibu}','IbuController@hapus');
Route::get('ibu/lihat/{ibu}','IbuController@lihat');

Route::get('keterangan','KeteranganController@awal');
Route::get('keterangan/tambah','KeteranganController@tambah');
Route::get('keterangan/{keterangan}','KeteranganController@lihat');
Route::post('keterangan/simpan','KeteranganController@simpan');
Route::get('keterangan/edit/{keterangan}','KeteranganController@edit');
Route::post('keterangan/edit/{keterangan}','KeteranganController@update');
Route::get('keterangan/hapus/{keterangan}','KeteranganController@hapus');
Route::get('keterangan/lihat/{keterangan}','KeteranganController@lihat');

Route::get('jadwal','JadwalController@awal');
Route::get('jadwal/tambah','JadwalController@tambah');
Route::get('jadwal/{jadwal}','JadwalController@lihat');
Route::post('jadwal/simpan','JadwalController@simpan');
Route::get('jadwal/edit/{jadwal}','JadwalController@edit');
Route::post('jadwal/edit/{jadwal}','JadwalController@update');
Route::get('jadwal/hapus/{jadwal}','JadwalController@hapus');
Route::get('jadwal/lihat/{jadwal}','JadwalController@lihat');

Route::get('rekammedis','RekamMedisController@awal');
Route::get('rekammedis/tambah','RekamMedisController@tambah');
Route::get('rekammedis/{rekammedis}','RekamMedisController@lihat');
Route::post('rekammedis/simpan','RekamMedisController@simpan');
Route::get('rekammedis/edit/{rekammedis}','RekamMedisController@edit');
Route::post('rekammedis/edit/{rekammedis}','RekamMedisController@update');
Route::get('rekammedis/hapus/{rekammedis}','RekamMedisController@hapus');
Route::get('rekammedis/lihat/{rekammedis}','RekamMedisController@lihat');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('ruangan/{ruangan}','RuanganController@lihat');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('master');
  //});
Route::get('/', function () {
    return view('master');
 });

