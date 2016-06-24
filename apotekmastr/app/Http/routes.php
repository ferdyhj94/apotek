<?php

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

Route::get('/', function () {


	if(Auth::user()){
	if(Auth::user()->hak_akses == 'admin')
    		{
    			return Redirect::to('home');
    			
    		}elseif(Auth::user()->hak_akses == 'wali_kls'||'kepsek')
    		{
    			return Redirect::to('home');
    		}
    		elseif(Auth::user()->hak_akses == 'siswa')
    		{
    			return Redirect::to('home');
    			
    		}
    	}    	else{
    return Redirect::to('login');
}
});

Route::get('login',function(){
	return view('auth.login');
});

Route::get('regsiswa',function(){
if(Auth::user()){
	if(Auth::user()->hak_akses == 'admin')
    		{
    			return Redirect::to('regsiswa');
    			
    		}elseif(Auth::user()->hak_akses == 'wali_kls'||'kepsek')
    		{
    			return Redirect::to('regsiswa');
    		}
    	}    
    		else{
    return Redirect::to('login');
}
});

Route::auth();

Route::get('/dashboard', 'HomeController@index');

Route::get('daftar-kategori','ManagedData@listkat');

Route::get('daftar-stok','ManagedData@liststok');

Route::get('daftar-user','ManagedData@listuser');

Route::get('daftar-transaksi','ManagedData@transaksi');

Route::post('del-obat','ManagedData@hapusobat');
Route::post('del-kat','ManagedData@hapuskat');

Route::get('edit-obat','ManagedData@editobat');
Route::get('edit-kat','ManagedData@editkat');
Route::get('edit-stok','ManagedData@editstok');
Route::get('edit-user','ManagedData@edituser');

Route::get('tambah-stok','ManagedData@tbhstok');
Route::get('tambah-obat','ManagedData@tbhobat');
Route::get('tambah-kat','ManagedData@tbhkat');
Route::get('tambah-user','ManagedData@tbhuser');

Route::post('tbhstok','ManagedData@tbhstokps');
Route::post('tbhobat','ManagedData@tbhobatps');
Route::post('tbhkat','ManagedData@tbhkatps');
Route::post('tbhuser','ManagedData@tbhuserps');

Route::post('editobat/{id}','ManagedData@editobatps');
Route::post('editstok/{id}','ManagedData@editstok');
Route::post('editkat/{id}','ManagedData@editstok');
Route::post('edituser/{id}','ManagedData@edituser');

