<?php

namespace App\Http\Controllers;

use App\Models\Lancamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LancamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lancamento.create');
    }

    public function list()
    {
        $etiquetas = DB::table('lancamentos_etiqueta')->distinct()->get();
        return view('lancamento.list' , ['etiquetas' => $etiquetas]);


    }

    public function crialancamento($id=NULL)
    {
    return view('lancamento.crialancamento',
     ['titulo' => 'Cadastro de Lançamento'],
     ['id' => $id]
    );
    }

    public function novolancamento(Request $request)
    {
        $lancamento = new Lancamentos();
        $lancamento->etiqueta_id = $request->input('id');
        $lancamento->nome = $request->input('nome');
        $lancamento->lancamento_status = $request->input('lancamento_status');
        $lancamento->estado = $request->input('estado');
        $lancamento->cidade = $request->input('cidade');
        $lancamento->bairro = $request->input('bairro');
        $lancamento->rua = $request->input('rua');
        $lancamento->numero = $request->input('numero');
        $lancamento->ruapavimentada = $request->input('ruapavimentada');
        $lancamento->tipo = $request->input('tipo');
        $lancamento->quarto = $request->input('quarto');
        $lancamento->banheiro = $request->input('banheiro');
        $lancamento->suite = $request->input('suite');
        $lancamento->garagem = $request->input('garagem');
        $lancamento->metrosconst = $request->input('mtsconst');
        $lancamento->valor = $request->input('valor');
        $lancamento->descricao = $request->input('descricao');

         $lancamento->save();
            
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lancamentos  $lancamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Lancamentos $lancamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lancamentos  $lancamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Lancamentos $lancamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lancamentos  $lancamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lancamentos $lancamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lancamentos  $lancamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lancamentos $lancamentos)
    {
        //
    }
}
