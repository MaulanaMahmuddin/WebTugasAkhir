<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('/home', 'HomeController@index')->name('home');

route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/index','dashbaordController@index')->name('index');

Route::get('/indexkasir', 'DasboardKasirController@indexKasir')->name('indexKasir');

// CRUD SUPERADMIN

Route::get('/superadmin', 'SuperadminController@index')->name('superadmin');
Route::get('/superadmin/{id}/editAdmin', 'SuperadminController@editAdmin')->name('superadmin.{id}.editAdmin');
Route::post('/superadmin/editAdmin/{id}', 'superadminController@updateAdmin')->name('superadmin.updateAdmin');
Route::get('/superadmin/inputAdmin', 'SuperadminController@inputAdmin')->name('superadmin.inputAdmin');
Route::post('/superadmin/simpanAdmin', 'SuperadminController@simpanAdmin')->name('superadmin.simpanAdmin');
Route::get('/superadmin/destroy/{id}', 'SuperadminController@destroyAdmin')->name('superadmin.destroy');

// CRUD KASIR
Route::get('/kasir', 'KasirController@index')->name('kasir');
Route::get('/kasir/{id}/editKasir', 'KasirController@editKasir')->name('kasir.{id}.editKasir');
Route::post('/kasir/editKasir/{id}', 'KasirController@updateKasir')->name('superadmin.updateKasir');
Route::get('/kasir/inputKasir', 'KasirController@inputKasir')->name('kasir.inputKasir');
Route::post('/kasir/simpanKasir', 'KasirController@simpanKasir')->name('kasir.simpanKasir');
Route::get('/kasir/destroyKasir/{id}', 'KasirController@destroyKasir')->name('kasir.destroyKasir');

// CRUD Master Keranjang
Route::get('/masterKeranjang', 'MasterKeranjangController@index')->name('masterKeranjang');
Route::get('/masterKeranjang/{id}/editMasterKeranjang', 'MasterKeranjangController@editMasterKeranjang')->name('masterKeranjang.editMasterKeranjang');
Route::post('/masterKeranjang/editMasterKeranjang/{id}', 'MasterKeranjangController@updateMasterKeranjang')->name('masterKeranjang.updateMasterKeranjang');
Route::get('/masterKeranjang/inputMasterKeranjang', 'MasterKeranjangController@inputMasterKeranjang')->name('masterKeranjang.inputMasterKeranjang');
Route::post('/masterKeranjang/simpanMasterKeranjang', 'MasterKeranjangController@simpanMasterKeranjang')->name('masterKeranjang.simpanMasterKeranjang');
Route::get('/masterKeranjang/destroyMasterKeranjang/{id}', 'MasterKeranjangController@destroyMasterKeranjang')->name('masterKeranjang.destroyMasterKeranjang');

// CRUD Master Barang
Route::get('/masterBarang', 'MasterBarangController@index')->name('masterBarang');
Route::get('/masterBarang/{id}/editMasterBarang', 'MasterBarangController@editMasterBarang')->name('masterBarang.editMasterBarang');
Route::post('/masterBarang/editMasterBarang/{id}', 'MasterBarangController@updateMasterBarang')->name('masterBarang.updateMasterBarang');
Route::get('/masterBarang/inputMasterBarang', 'MasterBarangController@inputMasterBarang')->name('masterBarang.inputMasterBarang');
Route::post('/masterBarang/simpanMasterBarang', 'MasterBarangController@simpanMasterBarang')->name('masterBarang.simpanMasterBarang');
Route::get('/masterBarang/destroyMasterBarang/{id}', 'MasterBarangController@destroyMasterBarang')->name('masterBarang.destroyMasterBarang');

// CRUD TRANSAKSI
Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
Route::get('/transaksi/{id}/editTransaksi', 'TransaksiController@editTransaksi')->name('transaksi.editTransaksi');
Route::get('/transaksi/inputTransaksi', 'TransaksiController@inputTransaksi')->name('transaksi.inputTransaksi');
Route::post('/transaksi/simpanTransaksi', 'TransaksiController@simpanTransaksi')->name('transaksi.simpanTransaksi');
Route::get('/transaksi/destroyTransaksi/{id}', 'TransaksiController@destroyTransaksi')->name('transaksi.destroyTransaksi');

Auth::routes();

