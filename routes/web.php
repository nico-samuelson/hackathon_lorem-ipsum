<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\DashboardController;

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