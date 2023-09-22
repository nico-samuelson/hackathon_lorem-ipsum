<?php

use App\Http\Controllers\DaftarMemberController;
use App\Http\Controllers\PesanController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    // dd('tes');/
    return Inertia::render('Welcome', [
        'title' => 'Tes'
    ]);
})->name('home');

Route::get('/pesan',[PesanController::class,'index'])->name('pesan');
Route::get('/member/daftar',[DaftarMemberController::class,'index'])->name('daftar-member-view');
Route::post('/member/daftar/proses',[DaftarMemberController::class,'proses'])->name('daftar-member-proses');