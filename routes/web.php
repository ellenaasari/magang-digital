<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMagangController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\StudentManagerController;
use App\Http\Controllers\UserController;
use App\Models\Magang;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);

// Route::post('register', [RegisteredUserController::class, 'store'])->name('register');
Route::get('in-processing', function(){
    return view('layouts.error.processing');
})->name('in-processing');
Route::get('thank-you-for-register', function(){
    return view('layouts.success.thank-you-for-register');
})->name('thank-you-for-register');
Route::get('on-reject', function(){
    return view('layouts.error.on-reject');
})->name('on-reject');

Route::middleware(['auth','role:Admin'])->group(function () {

    Route::get('tambah-ekstra', [ MagangController::class, 'storePage' ])->name('tambah-ekstra');
    Route::post('tambah-ekstra', [ MagangController::class, 'store' ])->name('tambah-ekstra');
    Route::get('kelola-ekstra', [ MagangController::class, 'managePage' ])->name('kelola-ekstra');
    Route::get('hapus-ekstra/{id}', [ MagangController::class, 'destroy' ])->name('hapus-ekstra');
    Route::get('ubah-ekstra/{id}', [ MagangController::class, 'editPage' ])->name('ubah-ekstra');
    Route::post('ubah-ekstra/{id}', [ MagangController::class, 'edit' ])->name('ubah-ekstra');

    Route::post('konfirmasi-pendaftar', [ UserController::class, 'konfirmasiPendaftar' ])->name('konfirmasi-pendaftar');
    Route::post('tolak-pendaftar', [ UserController::class, 'tolakPendaftar' ])->name('tolak-pendaftar');
    Route::get('pengajuan-pendaftar', [ UserController::class, 'pengajuanPendaftar' ])->name('pengajuan-pendaftar');

    Route::get('daftar-pembina', [ LeaderController::class, 'index' ])->name('daftar-pembina');
    Route::get('tambah-pembina', [ LeaderController::class, 'tambahPembinaPage' ])->name('tambah-pembina');
    Route::post('tambah-pembina', [ LeaderController::class, 'tambahPembina' ])->name('tambah-pembina');

    Route::get('daftar-kesiswaan', [ StudentManagerController::class, 'index' ])->name('daftar-kesiswaan');
    Route::get('tambah-kesiswaan', [ StudentManagerController::class, 'tambahKesiswaanPage' ])->name('tambah-kesiswaan');
    Route::post('tambah-kesiswaan', [ StudentManagerController::class, 'tambahKesiswaan' ])->name('tambah-kesiswaan');
});

Route::group(['middleware' => ['auth','role:Admin|Magang Leader']],function () {
    Route::get('daftar-peserta',[UserController::class,'index'])->name('daftar-peserta');
    Route::post('tolak-pengajuan-ekstrakurikuler',[DataMagangController::class, 'tolakPengajuan'])->name('tolak-pengajuan-ekstrakurikuler');
    Route::post('konfirmasi-pengajuan-ekstrakurikuler',[DataMagangController::class, 'konfirmasiPengajuan'])->name('konfirmasi-pengajuan-ekstrakurikuler');
    Route::get('pengajuan-ekstrakurikuler',[DataMagangController::class, 'pengajuanPage'])->name('pengajuan-ekstrakurikuler');
});

Route::group(['middleware' => ['auth','role:Admin|Student Manager']],function () {
    Route::get('daftar-peserta/{name}/{gradeParam}',[UserController::class,'daftarPesertaByName'])->name('daftar-peserta-by-sp');
    Route::get('cetak-pdf/{grade}/{sp}',[UserController::class,'cetakPdf'])->name('cetak-pdf');
    Route::get('getGender',[ DashboardController::class, 'getGender' ]);
});

Route::group(['middleware'=> ['auth','role:Admin|Student|Magang Leader|Student Manager']], function(){
    Route::get('dashboard',[ DashboardController::class, 'index' ])->name('dashboard');
    Route::get('profile',[UserController::class,'getProfile'])->name('profile');
});

Route::group(['middleware'=> ['auth','role:Admin|Student']], function(){
    Route::get('melengkapi-data',[UserController::class, 'melengkapiData'])->name('melengkapi-data');
    Route::post('ubah-identitas/{id}',[UserController::class,'ubahIdentitas'])->name('ubah-identitas');
    Route::get('daftar-ekstra', [ MagangController::class, 'index' ])->name('daftar-ekstra');
    Route::get('pendaftaran-ekstrakurikuler',[MagangController::class, 'pendaftaranPage'])->name('pendaftaran-ekstrakurikuler');
    Route::post('daftar-ekstrakurikuler/{id}',[DataMagangController::class, 'daftarEkstrakurikuler'])->name('daftar-ekstrakurikuler');
    Route::get('daftar-pengajuan-ekstra',[DataMagangController::class, 'daftarPengajuanEkstra'])->name('daftar-pengajuan-ekstra');
});

require __DIR__.'/auth.php';
