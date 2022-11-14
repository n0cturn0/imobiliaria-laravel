<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
    public function index()
    {
        //Lancamentos
        $lancamentos = DB::select('select * from empreedimentos');
        // $lancamentos = DB::select('select lancamentos.id, valor, descricao, cidade, estado, lancamentos_etiqueta.banner_lancamento, lancamentos_etiqueta.nome_lancamento from lancamentos inner join
        // lancamentos_etiqueta  on
        // lancamentos.etiqueta_id = lancamentos_etiqueta.id');
        //Destaques
        $destaque = DB::select('select * from lancamentos 
        inner join lancamentos_fotos  on
        lancamentos_fotos.id_lancamento  = lancamentos.etiqueta_id where lancamentos_fotos.destaque = 1 ');
        //Bairros
        $bairro = DB::select('select distinct bairro from lancamentos');
        if(count($bairro) == 0){ $bairro ="Sem bairro para mostrar"; }
        //Cidades
        $cidade = DB::select('select distinct cidade from lancamentos');
        if(count($cidade) == 0){ $cidade ="Sem cidade para exibir"; }
        //Corretores
        $corretores = DB::table('corretor')->get();
        if (count($corretores) == 0) { $corretores = ''; }
        //Imoveis
        $imoveis = DB::select('select *, imovel.valor from imovel_fotos inner join imovel on imovel_fotos.id_lancamento = imovel.id where imovel_fotos.destaque = 1');
        //Footer
        $footer_lancamento = DB::select('select *, lancamentos_etiqueta.id as etiquetaid, lancamentos_etiqueta.banner_lancamento as capa  from lancamentos_etiqueta inner join empreedimentos ON empreedimentos.id = lancamentos_etiqueta.id_empreeendimento limit 2');


        $data = [
            'lancamentos' => $lancamentos,
            'destaques' => $destaque,
            'bairro' => $bairro,
            'cidades' => $cidade,
            'corretores' => $corretores,
            'imoveis' => $imoveis,
            'footer_lancamento' => $footer_lancamento,
        ];
         return view('itshome',['data'=>$data]);
         // return view('teste',compact('all_products'))->render();
    }

    public function forempreendimento($id=NULL)
    {
        $etiqueta = DB::select('select * from lancamentos_etiqueta where id_empreeendimento = ?', [$id]);
        return view('forempreendimento', ['etiqueta' => $etiqueta]);
    }


   
  
   


 



    
}
