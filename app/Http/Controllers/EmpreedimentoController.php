<?php

namespace App\Http\Controllers;

use App\Models\Empreedimento;
use App\Http\Requests\StoreEmpreedimentoRequest;
use App\Http\Requests\UpdateEmpreedimentoRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;




class EmpreedimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empreendimento.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empreedimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmpreedimentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpreedimentoRequest $request)
    {
        //
    }

    public function list()
    {
    $etiquetas = DB::table('empreedimentos')->distinct()->get();
    return view('empreendimento.list' , ['etiquetas' => $etiquetas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empreedimento  $empreedimento
     * @return \Illuminate\Http\Response
     */
    public function show(Empreedimento $empreedimento)
    {
        //
    }
    public function lancamentomebros($id='NULL')
    {

        $empreedimento =  DB::table('lancamentos_etiqueta')->where('id_empreeendimento', '=', $id)->get();
        dd($empreedimento->id);
        // $empreendimento = DB::select('select * from lancamentos_etiqueta inner join lancamentos on
        // lancamentos.etiqueta_id  = lancamentos_etiqueta.id where lancamentos_etiqueta.id_empreeendimento = ?', [$id]);
        //  return view('empreendimento.lancamentomebros', ['empreendimento' => $empreendimento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empreedimento  $empreedimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Empreedimento $empreedimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpreedimentoRequest  $request
     * @param  \App\Models\Empreedimento  $empreedimento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmpreedimentoRequest $request, Empreedimento $empreedimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empreedimento  $empreedimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empreedimento $empreedimento)
    {
        //
    }

    public function apagarempreendimento($id=NULL)
    {
    if ($deleted = DB::table('empreedimentos')->where('id', $id)->delete())
    {
    return redirect()->back();
    }
    }
}
