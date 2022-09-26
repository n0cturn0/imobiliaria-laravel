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
Route::get('/dashboard', [\App\Http\Controllers\ControllerDashboard::class,'index'])->name('dashboard');
Route::get('/lancamento-create', [\App\Http\Controllers\LancamentosController::class,'create'])->name('lancamento-create');
Route::get('/lancamento-list', [\App\Http\Controllers\LancamentosController::class,'list'])->name('lancamento-list');
Route::get('/lancamento-novo/{id}', [\App\Http\Controllers\LancamentosController::class,'crialancamento'])->name('lancamento-novo');
Route::post('/novo-lancamento', [\App\Http\Controllers\LancamentosController::class,'novolancamento'])->name('novo-lancamento');
Route::post('/upload', [\App\Http\Controllers\LancamentosController::class,'upload'])->name('upload');
Route::post('/atualiza-lancamento', [\App\Http\Controllers\LancamentosController::class,'atualizalancamento'])->name('atualiza-lancamento');

Route::get('/lancamento-editarinformacao/{id}', [\App\Http\Controllers\LancamentosController::class,'editarlancamento'])->name('lancamento-editarinformacao');
Route::get('/lancamento-editarimagen/{id}', [\App\Http\Controllers\LancamentosController::class,'editarimagem'])->name('lancamento-editarinagem');

Route::get('/', function () {
    return view('welcome');
});
