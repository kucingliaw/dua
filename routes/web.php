<?php

use App\Http\Controllers\DashboardBukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
})->name('home');

Route::get('/kategori', function () {
    return view('kategori', [
        'title' => 'Kategori'
    ]);
})->name('kategori');

// Login - Logout Route
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'bukus' => Buku::all(),
        'kategoris' => Kategori::all(),
        'penerbits' => Penerbit::all()
    ]);
})->name('dashboard')->middleware('auth');

// Dashboard Buku Route
Route::resource('/dashboard/buku', DashboardBukuController::class)->middleware('auth');
