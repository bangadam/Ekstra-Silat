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

Route::get('/', [
	'uses' 	=> 	'HomeController@index',
	'as'	=>	'home'
]);

//  Auth Area
Route::get('/login', [
	'uses'	=>	'AuthController@getLogin',
	'as'	=>	'auth.login'
]);

Route::get('/register', [
	'uses'	=>	'AuthController@getRegister',
	'as'	=>	'auth.register'
]);

Route::post('/register', [
	'uses'	=>	'AuthController@postRegister'
]);

Route::post('/login', [
	'uses'	=>	'AuthController@postLogin'
]);

Route::get('/logout', [
	'uses'	=>	'AuthController@getLogout',
	'as'	=>	'auth.logout'
]);


// Admin Home
Route::get('/dashboard', [
	'uses'	=> 	'AdminController@index',
	'as'	=> 	'admin.index',
]);
	

//  warga Route

	Route::group(['prefix' => 'warga'], function() {
		
		Route::get('/', [
			'uses'	=>	'WargaController@getPembina',
			'as'	=>	'warga'
		]);

		Route::get('/tambah', [
			'uses'	=>	'WargaController@getTambah',
			'as'	=>	'warga.tambah',
			
		]);

		Route::post('/tambah', [
			'uses'	=>	'WargaController@postTambah',
			
		]);
		
		Route::get('/{id}/edit', [
			'uses'	=>	'WargaController@getEdit', 
			'as'	=>	'warga.edit',
			
		]);

		Route::put('/{id}', [
			'uses'	=>	'WargaController@putEdit',
			'as'	=>	'warga.update',
			
		]);

		Route::get('/{id}/hapus', [
			'uses'	=>	'WargaController@getHapus',
			'as'	=>	'warga.hapus',
			
		]);

		Route::get('/lihat/{id}', [
			'uses'	=>	'WargaController@getLihat',
			'as'	=>	'warga.lihat'
		]);

		
		Route::get('/downloadExcel/{type}', 'WargaController@downloadExcel');

		

		Route::get('/PrintPdf', [
			'uses'	=>	'WargaController@getPdf',
			'as'	=>	'warga.print'
		]);
	});


//  Siswa Route

	Route::group(['prefix' => 'Siswa'], function() {
		Route::get('/', [
			'uses'	=>	'SiswaController@getSiswa',
			'as'	=>	'Siswa'
		]);

		Route::get('/tambah', [
			'uses'	=>	'SiswaController@getTambah',
			'as'	=>	'Siswa.tambah',
			
		]);
		Route::post('/tambah', [
			'uses'	=>	'SiswaController@postTambah',
			
		]);

		Route::get('/{id}/edit', [
			'uses'	=>	'SiswaController@getEdit', 
			'as'	=>	'Siswa.edit',
			
		]);

		Route::put('/{id}', [
			'uses'	=>	'SiswaController@putEdit',
			'as'	=>	'Siswa.update',
			
		]);

		Route::get('/{id}/hapus', [
			'uses'	=>	'SiswaController@getHapus',
			'as'	=>	'Siswa.hapus',
			
		]);

		Route::get('/lihat/{id}', [
			'uses'	=>	'SiswaController@getLihat',
			'as'	=>	'Siswa.lihat'
		]);

	});



//Kegiatan

	Route::group(['prefix' => 'kegiatan'], function() {
		Route::get('/', [
			'uses'	=>	'KegiatanController@getKegiatan', 
			'as'	=>	'lihat.kegiatan',
		]);

		Route::get('/tambah', [
			'uses'	=>	'KegiatanController@getTambahKegiatan', 
			'as'	=>	'kegiatan',
			
		]);

		Route::post('/tambah', [
			'uses'	=>	'KegiatanController@postTambahKegiatan',
			'as'	=>	'kegiatan.tambah',
		]);

		Route::get('/{id}/edit', [
			'uses' 	=>	'KegiatanController@getEditKegiatan',
			'as'	=>	'kegiatan.edit',
			
		]);

		Route::put('/{id}', [
			'uses' 	=>	'KegiatanController@putEditKegiatan',
			'as'	=>	'kegiatan.update',
			
		]);

		Route::get('/{id}/hapus', [
			'uses'	=>	'KegiatanController@getHapusKegiatan',
			'as'	=>	'kegiatan.hapus',
			
		]);
	});



//Absensi
Route::group(['prefix' => 'absensi'], function() {
		Route::get('/', [
			'uses'	=>	'AbsensiController@index', 
			'as'	=>	'absensi',
		]);
		Route::get('/lihat',[
			'uses'	=> 'AbsensiController@lihat',
			'as'	=>	'lihat.absensi',
			]);
		Route::post('/save',[
			'uses'	=> 'AbsensiController@postTambah',
			'as'	=>	'save.absensi',
			]);
	});
		Route::get('/absensis/lihat/{id}','AbsensiController@tampil');

//User
Route::group(['prefix'	=>	'user'], function(){
	Route::get('/pelatih',[
		'uses'	=>	'UserController@getPelatih',
		'as'	=>	'daftar.pelatih',
		]);
	Route::get('/siswa',[
		'uses'	=>	'UserController@getSiswa',
		'as'	=>	'daftar.siswa',
		]);
	Route::get('/kegiatan',[
		'uses'	=>	'UserController@getKegiatan',
		'as'	=>	'daftar.kegiatan',
		]);
	Route::get('/absensi',[
		'uses'	=>	'UserController@getAbsensi',
		'as'	=>	'daftar.absensi',
		]);
});

