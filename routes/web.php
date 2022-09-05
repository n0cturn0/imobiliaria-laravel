<?php

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

Route::get('/index', [\App\Http\Controllers\PrincipalController::class,'index'])->name('index');
Route::get('/dashboard', [\App\Http\Controllers\ControllerDashboard::class,'index'])->name('index');
Route::get('/lancamento-create', [\App\Http\Controllers\LancamentosController::class,'create'])->name('lancamento-create');
Route::get('/', function () {
    return view('welcome');
});
