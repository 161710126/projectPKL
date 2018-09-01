<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

 
Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
	   Route::get('/home', 'HomeController@index')->name('home');
       Route::resource('gurus', 'GuruController');
	   Route::resource('eskuls', 'EskulController');
       Route::resource('fasilitas','FasilitasController');
       Route::resource('prestasis','PrestasiController');
       Route::resource('kategorisartikel','KategoriArtikelController');
       Route::resource('artikels','ArtikelController');
       Route::resource('kategorisfasilitas','KategoriFasilitasController');
       Route::resource('kategorisgaleri','KategoriGaleriController');
       Route::resource('galeris','GaleryController');
});

//Route::get('/','FrontendController@daftar_guru');
//Route::get('/daftarguru','FrontendController@daftar_guru');
//Route::get('/daftargaleri','FrontendController@daftar_galeri');
//Route::resource('daftarartikel','FrontendController@daftar_artikel');

Route::get('mts','UserController@index')->name('mts');
Route::get('guru','GuruController@index1')->name('guru');
Route::get('eskul','EskulController@index1')->name('eskul');
Route::get('artikel','ArtikelController@index1')->name('artikel');
Route::get('prestasi','PrestasiController@index1')->name('prestasi');
Route::get('fasilitas','FasilitasController@index1')->name('fasilitas');
Route::get('galeri','GaleryController@index1')->name('galeri');