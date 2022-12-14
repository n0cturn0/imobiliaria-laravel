<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetalhaImovelController extends Controller
{
    public function index($id=NULL)
    {
        $lancamento = DB::select('select * from imovel inner join imovel_fotos on imovel.id = imovel_fotos.id_lancamento where imovel.id = ?',[$id]);
        $titulo = DB::table('imovel')->where('id', '=', $id)->first();
        $data = [
            'lancamento' => $lancamento,
            'titulo'     => $titulo,
            'tipo'         => 1
        ];
         return view('Imoveldetalha' , ['data'=>$data]);
       
    }
}
