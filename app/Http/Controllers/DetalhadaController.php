<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DetalhadaController extends Controller
{
    public function index($id=NULL)
    {
        $lancamento = DB::select('select * from lancamentos inner join lancamentos_fotos ON lancamentos.id = lancamentos_fotos.id_lancamento where lancamentos.id = ?',[$id]);
        $data = [
            'lancamento' => $lancamento
        
        ];
         return view('detalhada' , ['data'=>$data]);
       
    }
}
