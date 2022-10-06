<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImovelModel;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Redirect ;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class ImovelController extends Controller
{
    public function create()
    {
    return view('imovel.create'); 
    
    }

    public function save(Request $request)
    {
        $request->validate([  
            'titulo' => 'required',
            'tipo' => 'required',
            'lancamento_status' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'ruapavimentada' => 'required',
            'quarto' => 'required',
            'banheiro' => 'required',
            'suite' => 'required',
            'garagem' => 'required',
            ]);
    $imovel = new ImovelModel;
    $imovel->titulo = $request->input('titulo');
    $imovel->tipo = $request->input('tipo');
    $imovel->lancamento_status = $request->input('lancamento_status');
    $imovel->estado = $request->input('estado');
    $imovel->cidade = $request->input('cidade');
    $imovel->bairro = $request->input('bairro');
    $imovel->rua = $request->input('rua');
    $imovel->numero = $request->input('numero');
    //$imovel->cep = $request->input('cep');
    $imovel->ruapavimentada = $request->input('ruapavimentada');
    $imovel->quarto = $request->input('quarto');
    $imovel->banheiro = $request->input('banheiro');
    $imovel->suite = $request->input('suite');
    $imovel->garagem = $request->input('garagem');
    $imovel->valor = $request->input('valor');
    $imovel->descricao = $request->input('descricao');
    $imovel->metrosconst = $request->input('mtsconst');
    if ($imovel->save()){
        return redirect()->back();
        } 
    }
    
}