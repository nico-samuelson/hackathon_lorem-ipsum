<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarMemberController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); 

Route::get('/pesan',[PesanController::class,'index'])->name('pesan');
Route::get('/member/daftar',[DaftarMemberController::class,'index'])->name('daftar-member-view');
Route::post('/member/daftar/proses',[DaftarMemberController::class,'proses'])->name('daftar-member-proses');

Route::get('/login', [MemberController::class, 'login'])->name('login');
Route::post('/login', [MemberController::class, 'login_process'])->name('login.process');
Route::match(['get', 'post'], '/logout', [MemberController::class, 'logout'])->name('logout');
Route::get('/member/dashboard',[MemberController::class,'dashboard'])->name('member.dashboard');