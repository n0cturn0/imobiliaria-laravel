<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DetalhadaController extends Controller
{
    public function index($id=NULL)
    {
        $lancamento = DB::select('select * from lancamentos inner join lancamentos_fotos ON lancamentos.id = lancamentos_fotos.id_lancamento where lancamentos.id = ?',[$id]);
        $titulo = DB::table('lancamentos')->where('etiqueta_id', '=', $id)->first();
        $data = [
            'lancamento' => $lancamento,
            'titulo' => $titulo,
            'tipo'         => 0
        ];
         return view('detalhada' , ['data'=>$data]);
       
    }
}
