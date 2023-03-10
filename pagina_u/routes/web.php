<?php

use App\Http\Controllers\DatosController;
use App\Http\Controllers\HistoricoController;
use Illuminate\Support\Facades\Auth;
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
    return redirect(route('login'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('datospersonales',[DatosController::class,'index'])->name('datospersonales');
Route::get('historico',[HistoricoController::class,'index'])->name('historico');
Route::get('avance_academico',[HistoricoController::class,'avance'])->name('avance_academico');

