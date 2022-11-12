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

    public function lista()
    {
        $all = DB::select('select * from lancamentos');
        $foto = DB::select('select * from lancamentos_fotos');

        $data = [
            'lancamento' => $all,
            'foto'         => $foto
        ];
        return view('listall', ['data' => $data]);
    }

    public function listaimoveis()
    {
        $all = DB::select('select * from imovel');
        $foto = DB::select('select * from imovel_fotos');

        $data = [
            'lancamento' => $all,
            'foto'         => $foto
        ];
        return view('listaimoveis', ['data' => $data]);
    }
}
