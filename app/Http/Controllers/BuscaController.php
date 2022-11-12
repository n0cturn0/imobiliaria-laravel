<?php

namespace App\Http\Controllers;

use App\Models\Lancamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuscaController extends Controller
{
    public function busca(Request $request)
    {
        // dd($request->all());
        $cidade = $request->input('cidade');
        $bairro = $request->input('bairro');
        $tipo = $request->input('tipo');
        $banheiro = $request->input('banheiro');
        $quarto = $request->input('quarto');
       

        $lancamento=Lancamentos::where('cidade', 'like', '%'.$cidade.'%')
                            // ->orWhere('bairro', 'like', '%'.$bairro.'%')
                            // ->orWhere('tipo', 'like', '%'.$tipo.'%')
                            // ->orWhere('banheiro', 'like', '%'.$banheiro.'%')
                            // ->orWhere('quarto', 'like', '%'.$quarto.'%')
                            ->get();
                            

        return view('list-lancamento');
                         
    }

    public function listLancamento()
    {
        $all = DB::select('select * from lancamentos_etiqueta');
        return view('listall', ['all' => $all]);
    }

}

