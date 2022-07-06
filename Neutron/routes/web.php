<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;

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
    return view('login/login');
});

Route::get('main', function () {
    return view('menu/main');
});

/*
Route::get('dashboard', function () {
    return view('menu/dashboard');
});
*/

/*
Route::get('karyawan', function () {
    return view('menu/dataKaryawan');
});
*/

/*
Route::get('transaksi', function () {
    return view('menu/dataTransaksi');
});
*/

/*
Route::get('outlet', function () {
    return view('menu/dataOutlet');
});
*/

/*Route::get('stok', function () {
    return view('menu/dataStok');
});
*/

//Route::get('register', function () {
//    return view('regist/regist');
//});



Route::get('/regist',[LoginController::class, 'regist'])->name('regist'); 
Route::post('/registuser',[LoginController::class, 'registuser'])->name('registuser');

Route::post('/loginprocess',[LoginController::class, 'loginprocess'])->name('loginprocess');

Route::get('/logoutprocess',[LoginController::class, 'logoutprocess'])->name('logoutprocess');

Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/karyawan',[KaryawanController::class, 'karyawan'])->name('karyawan');
Route::get('/editKaryawan/{id}',[KaryawanController::class, 'editKaryawan'])->name('editKaryawan');
Route::get('/tambahKaryawan',[KaryawanController::class, 'tambahKaryawan'])->name('tambahKaryawan');
Route::post('/insertKaryawan',[KaryawanController::class, 'insertKaryawan'])->name('insertKaryawan');
Route::post('/updateKaryawan/{id}',[KaryawanController::class, 'updateKaryawan'])->name('updateKaryawan');
Route::get('/hapusKaryawan/{id}',[KaryawanController::class, 'hapusKaryawan'])->name('hapusKaryawan');
Route::get('/editStok/{id}',[StokController::class, 'editStok'])->name('editStok');
Route::post('/updateStok/{id}',[StokController::class, 'updateStok'])->name('updateStok');
Route::get('/transaksi',[TransaksiController::class, 'transaksi'])->name('transaksi');
Route::get('/outlet',[OutletController::class, 'outlet'])->name('outlet');
Route::post('/insertOutlet',[OutletController::class, 'insertOutlet'])->name('insertOutlet');
Route::get('/editOutlet/{id}',[OutletController::class, 'editOutlet'])->name('editOutlet');
Route::post('/updateOutlet/{id}',[OutletController::class, 'updateOutlet'])->name('updateOutlet');
Route::get('/hapusOutlet/{id}',[OutletController::class, 'hapusOutlet'])->name('hapusOutlet');
Route::get('/tambahOutlet',[OutletController::class, 'tambahOutlet'])->name('tambahOutlet');
Route::get('/stok',[StokController::class, 'stok'])->name('stok');
Route::get('/hapusStok/{id}',[StokController::class, 'hapusStok'])->name('hapusStok');
Route::get('/tambahStok',[StokController::class, 'tambahStok'])->name('tambahStok');
Route::post('/insertStok',[StokController::class, 'insertStok'])->name('insertStok');
Route::get('/search',[SearchController::class, 'search'])->name('search');
Route::get('/searchOutlet',[SearchController::class, 'searchOutlet'])->name('searchOutlet');
Route::get('/searchStok',[SearchController::class, 'searchStok'])->name('searchStok');
Route::get('/tentang',[TentangController::class, 'tentang'])->name('tentang');

Route::get('/tambahNur',[TransaksiController::class, 'tambahNur'])->name('tambahNur');
Route::post('/insertNur',[TransaksiController::class, 'insertNur'])->name('insertNur');
Route::get('/editNur/{id}',[TransaksiController::class, 'editNur'])->name('editNur');
Route::post('/updateNur/{id}',[TransaksiController::class, 'updateNur'])->name('updateNur');

Route::get('/tambahSiti',[TransaksiController::class, 'tambahSiti'])->name('tambahNur');
Route::post('/insertSiti',[TransaksiController::class, 'insertSiti'])->name('insertSiti');
Route::get('/editSiti/{id}',[TransaksiController::class, 'editSiti'])->name('editSiti');
Route::post('/updateSiti/{id}',[TransaksiController::class, 'updateSiti'])->name('updateSiti');

Route::get('/tambahJamal',[TransaksiController::class, 'tambahJamal'])->name('tambahJamal');
Route::post('/insertJamal',[TransaksiController::class, 'insertJamal'])->name('insertJamal');
Route::get('/editJamal/{id}',[TransaksiController::class, 'editJamal'])->name('editJamal');
Route::post('/updateJamal/{id}',[TransaksiController::class, 'updateJamal'])->name('updateJamal');

Route::get('/dataNovember',[TransaksiController::class, 'dataNovember'])->name('dataNovember');
Route::get('/dataSeptember',[TransaksiController::class, 'dataSeptember'])->name('dataSeptember');
Route::get('/dataOktober',[TransaksiController::class, 'dataOktober'])->name('dataOktober');