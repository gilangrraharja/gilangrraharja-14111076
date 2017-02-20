<?php
use App\mahasiswa;

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

Route::get('/', 'ViewController@index');
Route::get('pengaduan', 'ViewController@pengaduan');
Route::get('login', 'ViewController@login');
Route::get('tambah', function(){
	$mahasiswa = new mahasiswa;
	$mahasiswa -> nama = "gilang";
	$mahasiswa -> no_id = "14111076";
	$mahasiswa -> phone = "08122234711";
	$mahasiswa -> pengaduan = "error login";
	$mahasiswa -> save ();});

Route::get('ubah', function(){
	$mahasiswa = new mahasiswa;
	$mahasiswa -> nama = "gilang";
	$mahasiswa -> no_id = "14111076";
	$mahasiswa -> phone = "08122234711";
	$mahasiswa -> pengaduan = "sukses";
	$mahasiswa -> save ();});

Route::get('tampil', function(){
	$mahasiswa = mahasiswa::all();
	foreach ($mahasiswa as $mhs) {
		echo "<b>nama</b> :";
		echo $mhs->nama;
		echo "<b>no_id</b> :";
		echo $mhs->no_id;
		echo "<b>phone</b> :";
		echo $mhs->phone;
		echo "<b>pengaduan</b> :";
		echo $mhs->pengaduan;}
	});

Route::get('hapus', function(){
	$mahasiswa = mahasiswa::find(1);
	$mahasiswa -> delete();});