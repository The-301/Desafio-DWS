<?php

use App\Http\Controllers\EntradaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalidaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// routes/web.php

Route::get('/generate-pdf', [HomeController::class, 'generatePDF']);


Route::resource('/entradas', EntradaController::class);
Route::resource('/salidas', SalidaController::class);
