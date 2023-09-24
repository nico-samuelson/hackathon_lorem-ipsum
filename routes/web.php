<?php

use App\Http\Controllers\AdminPendaftaranController;
use App\Http\Controllers\DaftarMemberController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PesanController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddKambingController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\KambingController;
use App\Http\Controllers\RiwayatKambingController;
use App\Models\Produk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('welcome', [
        'title' => 'Etawa',
        'products' => Produk::orderBy('created_at', 'desc')->limit(3)->get(),
    ]);
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('checkAccess:inspektur'); 

Route::get('/pesan',[PesanController::class,'index'])->name('pesan')->middleware('checkAccess:inspektur,user,guest');

// daftar member
Route::get('/member/daftar',[DaftarMemberController::class,'index'])->name('daftar-member-view')->middleware('checkAccess:inspektur,user,guest');
Route::post('/member/daftar/proses',[DaftarMemberController::class,'proses'])->name('daftar-member-proses')->middleware('checkAccess:inspektur,user,guest');

Route::get('/login', [MemberController::class, 'login'])->name('login');
Route::post('/login', [MemberController::class, 'login_process'])->name('login.process');
Route::match(['get', 'post'], '/logout', [MemberController::class, 'logout'])->name('logout')->middleware('checkAccess:inspektur,user');

Route::get('/member/dashboard',[MemberController::class,'dashboard'])->name('member.dashboard')->middleware('checkAccess:user');
Route::get('/member/kambing',[MemberController::class,'kambing'])->name('member.kambing')->middleware('checkAccess:user');
Route::get('/member/kontrak',[MemberController::class,'kontrak'])->name('member.kontrak')->middleware('checkAccess:user');
Route::post('/member/kontrak', [MemberController::class, 'upload_kontrak'])->name('member.upload_kontrak')->middleware('checkAccess:user');

// Kambing
Route::get('/kambing', [KambingController::class,'kambing'])->name('all-kambing')->middleware('checkAccess:inspektur');
Route::delete('/kambing/{id}', [KambingController::class, 'setMeninggal'])->name('set-kambing-meninggal')->middleware('checkAccess:inspektur');
Route::get('/add-kambing',[AddKambingController::class,'addKambingView'])->name('add-kambing-view')->middleware('checkAccess:inspektur');
Route::post('/add-kambing/proses',[AddKambingController::class,'store'])->name('add-kambing-proses')->middleware('checkAccess:inspektur');

// Halaman Penerimaan Member
Route::get('/admin/pendaftaran',[AdminPendaftaranController::class,'index'])->name('admin.pendaftaran')->middleware('checkAccess:inspektur');
Route::post('/admin/pendaftaran/update-status',[AdminPendaftaranController::class,'updateStatus'])->name('admin.pendaftaran.update-status')->middleware('checkAccess:inspektur');

// Inspeksi Kambing
Route::get('/inspeksi-kambing',[AddKambingController::class,'inspeksiKambingView'])->name('inspeksi-kambing-view');
Route::post('/inspeksi-kambing/proses',[AddKambingController::class,'inspeksiKambingProses'])->name('inspeksi-kambing-proses');
Route::get('/riwayat-kambing', [RiwayatKambingController::class, 'index'])->name('riwayat-kambing')->middleware('checkAccess:inspektur');


// Add Produk
Route::get('/add-produk',[ProdukController::class,'addProdukView'])->name('add-produk-view')->middleware('checkAccess:inspektur');
Route::post('/add-produk/proses',[ProdukController::class,'addProdukProses'])->name('add-produk-proses')->middleware('checkAccess:inspektur');
Route::get('/list-produk', [ProdukController::class, 'listProduk'])->name('list-produk')->middleware('checkAccess:inspektur');
Route::delete('/delete-produk/{id}', [ProdukController::class, 'deleteProduk'])->name('delete-produk')->middleware('checkAccess:inspektur');

// Assets
Route::get('/assets/ktp/{path}',[AssetController::class,'ktp'])->name('assets.ktp');
Route::get('/assets/foto_kambing/{path}',[AssetController::class,'foto_kambing'])->name('assets.foto_kambing');
Route::get('/assets/foto_produk/{path}',[AssetController::class,'foto_produk'])->name('assets.foto_produk');
Route::get('/assets/kontrak/{path}',[AssetController::class,'kontrak'])->name('assets.kontrak');
Route::get('/assets/kontrak_signed/{path}',[AssetController::class,'kontrak_signed'])->name('assets.kontrak_signed');