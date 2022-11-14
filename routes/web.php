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
//Empreeendimento
Route::get('/lancamentomebros/{id}', [\App\Http\Controllers\EmpreedimentoController::class,'lancamentomebros'])->name('lancamentomebros');
Route::get('/empreendimento-create', [\App\Http\Controllers\EmpreedimentoController::class,'index'])->name('empreendimento-create');
Route::get('/empreendimento-list', [\App\Http\Controllers\EmpreedimentoController::class,'list'])->name('empreendimento-list');
Route::get('/apagarempreendimento/{id}', [\App\Http\Controllers\EmpreedimentoController::class,'apagarempreendimento'])->name('apagarempreendimento');
//Busca Lancamento
Route::post('/busca', [\App\Http\Controllers\BuscaController::class,'busca'])->name('buscalancamento');
// Route::post('/login', [\App\Http\Controllers\BuscaController::class,'login'])->name('login');

//Contato
Route::post('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('contato');
//LOGIN E USERS
Route::get('/painel', [\App\Http\Controllers\UsersController::class,'index'])->name('painel');
Route::post('/autentica', [\App\Http\Controllers\UsersController::class,'auth'])->name('autentica');
Route::get('/logout', [\App\Http\Controllers\UsersController::class,'logout'])->name('logout');
//Single Imovel
Route::get('/detalhada/{id}', [\App\Http\Controllers\DetalhadaController::class,'index'])->name('detalhada');
Route::get('/list-all', [\App\Http\Controllers\DetalhadaController::class,'lista'])->name('list-all');
Route::get('/list-all-imovel', [\App\Http\Controllers\DetalhadaController::class,'listaimoveis'])->name('list-all-imovel');

//Principal FOR RENT
Route::get('/for-empreendimento/{id}', [\App\Http\Controllers\PrincipalController::class,'forempreendimento'])->name('for-empreendimento');
Route::get('/search-product', [\App\Http\Controllers\PrincipalController::class,'search_products'])->name('search.products');
Route::get('/index', [\App\Http\Controllers\PrincipalController::class,'index'])->name('index');
Route::get('/welcome', [\App\Http\Controllers\PrincipalController::class,'index'])->name('index');
Route::get('/destaques', [\App\Http\Controllers\PrincipalController::class,'destaque'])->name('destaques');
Route::get('/dashboard', [\App\Http\Controllers\ControllerDashboard::class,'index'])->name('dashboard');
// Lancamentos
Route::get('/lancamento-create', [\App\Http\Controllers\LancamentosController::class,'create'])->name('lancamento-create');
Route::get('/lancamento-list', [\App\Http\Controllers\LancamentosController::class,'list'])->name('lancamento-list');
Route::get('/lancamento-novo/{id}', [\App\Http\Controllers\LancamentosController::class,'crialancamento'])->name('lancamento-novo');
Route::post('/novo-lancamento', [\App\Http\Controllers\LancamentosController::class,'novolancamento'])->name('novo-lancamento');
Route::post('/upload', [\App\Http\Controllers\LancamentosController::class,'upload'])->name('upload');
Route::post('/atualiza-lancamento', [\App\Http\Controllers\LancamentosController::class,'atualizalancamento'])->name('atualiza-lancamento');

Route::get('/lancamento-editarinformacao/{id}', [\App\Http\Controllers\LancamentosController::class,'editarlancamento'])->name('lancamento-editarinformacao');
Route::get('/lancamento-editarimagen/{id}', [\App\Http\Controllers\LancamentosController::class,'editarimagem'])->name('lancamento-editarinagem');
Route::get('/lancamento-apagarimagem/{id}', [\App\Http\Controllers\LancamentosController::class,'apagarimagem'])->name('lancamento-apagarimagem');
Route::get('/lancamento-destacarimagen/{id}', [\App\Http\Controllers\LancamentosController::class,'destacarimagem'])->name('lancamento-destacarimagen');

// Corretores
Route::get('/create-corretor', [\App\Http\Controllers\CorretorController::class,'create'])->name('create-corretor');
Route::get('/corretores-list', [\App\Http\Controllers\CorretorController::class,'list'])->name('corretores-list');
Route::get('/apaga-corretor/{id}', [\App\Http\Controllers\CorretorController::class,'apagar'])->name('apaga-corretor');
//DetalhaImovel
Route::get('/imoveldetalha/{id}', [\App\Http\Controllers\DetalhaImovelController::class,'index'])->name('detalha-imovel');
// Imoveis
Route::get('/create-imovel', [\App\Http\Controllers\ImovelController::class,'create'])->name('create-imovel');
Route::post('/insere-imovel', [\App\Http\Controllers\ImovelController::class,'save'])->name('insere-imovel');
Route::get('/list-imovel', [\App\Http\Controllers\ImovelController::class,'listar'])->name('list-imovel');
Route::get('/imovel-novo/{id}', [\App\Http\Controllers\ImovelController::class,'imovelimages'])->name('imovel-novo');
Route::post('/uploadimovel', [\App\Http\Controllers\ImovelController::class,'uploadimovel'])->name('uploadimovel');
Route::get('/imovel-editar/{id}', [\App\Http\Controllers\ImovelController::class,'editarimovel'])->name('imovel-editar');
Route::post('/atualiza-imovel', [\App\Http\Controllers\ImovelController::class,'atualizaimovel'])->name('atualiza-imovel');
Route::get('/imovel-editarimagen/{id}', [\App\Http\Controllers\ImovelController::class,'editarimovelimagem'])->name('imovel-editarimagen');
Route::get('/imovel-destacar/{id}', [\App\Http\Controllers\ImovelController::class,'destacar'])->name('imovel-destacar');
Route::get('/imovel-apagar/{id}', [\App\Http\Controllers\ImovelController::class,'apagarimovel'])->name('imovel-apagar');
Route::get('/imovel-deletar/{id}', [\App\Http\Controllers\ImovelController::class,'deletarimovel'])->name('imovel-deletar');
Route::get('/', function () {
    return view('welcome');
});
