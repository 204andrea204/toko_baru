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


Route::get('/edit', function () {
    return view('admin.barang.edit');
});

Route::get('/edit', function () {
    return view('admin.categori.edit');
});
Route::get('/tambah_cate', function () {
    return view('admin.categori.add');
});


Route::get('/login_admin', function () {
    return view('form.login'); 
});
Route::get('/home', function () {
    return view('admin.index'); 
});




Route::prefix('admin')->group(function(){
	Route::get('/barang', 'AdminController@indexbarang');
	Route::get('/barang/add', 'AdminController@addbarang')->name('barangAdd');
	Route::post('/barang/save', 'AdminController@savebarang');
	Route::get('/barang/edit/{id}', 'AdminController@editbarang');
	Route::post('/barang/update', 'AdminController@updatebarang');
	Route::get('/barang/delete/{id}', 'AdminController@deletebarang');


	Route::get('/categori', 'AdminController@indexcategori');
	Route::get('/categori/add', 'AdminController@addcategori');
	Route::post('/categori/save', 'AdminController@savecategori');
	Route::get('/categori/edit/{id}', 'AdminController@editcategori');
	Route::post('/categori/update', 'AdminController@updatecategori');
	Route::get('/categori/delete/{id}', 'AdminController@deletecategori');

	Route::get('/pesan', 'AdminController@indexpesan');
	Route::get('/pesan/add', 'AdminController@addpesan');
	Route::post('/pesan/save', 'AdminController@savepesan');
	Route::get('/pesan/edit/{id}', 'AdminController@editpesan');
	Route::post('/pesan/update', 'AdminController@updatepesan');
	Route::get('/pesan/delete/{id}', 'AdminController@deletepesan');

});

Route::get('admin/pemasukan', 'KeuanganController@indexpemasukan')->name('addpemasukan');
Route::get('admin/pemasukan/add', 'KeuanganController@addpemasukan')->name('addpemasukan');
Route::post('admin/pemasukan/save', 'KeuanganController@savepemasukan')->name('savepemasukan');
Route::get('admin/pemasukan/edit/{id}', 'KeuanganController@editpemasukan')->name('editpemasukan');
Route::post('admin/pemasukan/update', 'KeuanganController@updatepemasukan')->name('updatepemasukan');
Route::get('admin/pemasukan/delete/{id}', 'KeuanganController@deletepemasukan')->name('deletepemasukan');

Route::get('admin/pengeluaran', 'KeuanganController@indexpengeluaran')->name('addpengeluaran');
Route::get('admin/pengeluaran/add', 'KeuanganController@addpengeluaran')->name('addpengeluaran');
Route::post('admin/pengeluaran/save', 'KeuanganController@savepengeluaran')->name('savepengeluaran');
Route::get('admin/pengeluaran/edit/{id}', 'KeuanganController@editpengeluaran')->name('editpengeluaran');
Route::post('admin/pengeluaran/update', 'KeuanganController@updatepengeluaran')->name('updatepengeluaran');
Route::get('admin/pengeluaran/delete/{id}', 'KeuanganController@deletepengeluaran')->name('deletepengeluaran');
	