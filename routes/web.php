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
    return view('welcome', ['title' => 'Etawa']);
})->name('home');

Route::get('/coba', function() {
    return view('coba-welcome', ['title' => 'Etawa']);
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); 

Route::get('/pesan',[PesanController::class,'index'])->name('pesan');

// daftar member
Route::get('/member/daftar',[DaftarMemberController::class,'index'])->name('daftar-member-view');
Route::post('/member/daftar/proses',[DaftarMemberController::class,'proses'])->name('daftar-member-proses');

Route::get('/login', [MemberController::class, 'login'])->name('login');
Route::post('/login', [MemberController::class, 'login_process'])->name('login.process');
Route::match(['get', 'post'], '/logout', [MemberController::class, 'logout'])->name('logout');

Route::get('/member/dashboard',[MemberController::class,'dashboard'])->name('member.dashboard');
Route::get('/member/kambing',[MemberController::class,'kambing'])->name('member.kambing');
Route::get('/member/kontrak',[MemberController::class,'kontrak'])->name('member.kontrak');

// Add Kambing
Route::get('/add-kambing',[AddKambingController::class,'addKambingView'])->name('add-kambing-view');
Route::post('/add-kambing/proses',[AddKambingController::class,'store'])->name('add-kambing-proses');

Route::get('/admin/pendaftaran',[AdminPendaftaranController::class,'index'])->name('admin.pendaftaran');
Route::post('/admin/pendaftaran/update-status',[AdminPendaftaranController::class,'updateStatus'])->name('admin.pendaftaran.update-status');

// Inspeksi Kambing
Route::get('/inspeksi-kambing',[AddKambingController::class,'inspeksiKambingView'])->name('inspeksi-kambing-view');
Route::post('/inspeksi-kambing/proses',[AddKambingController::class,'inspeksiKambingProses'])->name('inspeksi-kambing-proses');

// Add Produk
Route::get('/add-produk',[ProdukController::class,'addProdukView'])->name('add-produk-view');
Route::post('/add-produk/proses',[ProdukController::class,'addProdukProses'])->name('add-produk-proses');

// Assets
Route::get('/assets/ktp/{path}',[AssetController::class,'ktp'])->name('assets.ktp');
Route::get('/assets/foto_kambing/{path}',[AssetController::class,'foto_kambing'])->name('assets.foto_kambing');
Route::get('/assets/foto_produk/{path}',[AssetController::class,'foto_produk'])->name('assets.foto_produk');

// PDF
Route::get('/pdf',[PDFController::class,'generateKontrak']);