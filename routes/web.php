<?php

use App\Http\Controllers\ProdukControllers;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('produk', ProdukControllers::class)->middleware('checkRole:admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');

Route::get('penjual', function () { return view('penjual'); })->middleware(['checkRole:penjual,admin']);

Route::get('pembeli', function () { return view('pembeli'); })->middleware(['checkRole:pembeli,admin']);
