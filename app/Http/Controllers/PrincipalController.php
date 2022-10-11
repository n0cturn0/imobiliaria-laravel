<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
    public function index()
    {
        //Lancamentos
        $lancamentos = DB::select('select * from lancamentos_etiqueta');
        // $lancamentos = DB::select('select lancamentos.id, valor, descricao, cidade, estado, lancamentos_etiqueta.banner_lancamento, lancamentos_etiqueta.nome_lancamento from lancamentos inner join
        // lancamentos_etiqueta  on
        // lancamentos.etiqueta_id = lancamentos_etiqueta.id');
        //Destaques
        $destaque = DB::select('select * from lancamentos 
        inner join lancamentos_fotos  on
        lancamentos_fotos.id_lancamento  = lancamentos.id where lancamentos_fotos.destaque = 1');
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

        $data = [
            'lancamentos' => $lancamentos,
            'destaques' => $destaque,
            'bairro' => $bairro,
            'cidades' => $cidade,
            'corretores' => $corretores,
            'imoveis' => $imoveis
            
        ];
         return view('itshome',['data'=>$data]);
         // return view('teste',compact('all_products'))->render();
    }


   
    // public function destaque()
    // {
    //     $destaque = DB::select('select * from lancamentos 
    //     inner join lancamentos_fotos  on
    //     lancamentos_fotos.id_lancamento  = lancamentos.id where lancamentos_fotos.destaque = 1');
    //     return view('destaques', ['destaqueshow' => $destaque]);
        
    // }
   


    public function search_products(Request $request)
    {   
        $all_products = DB::select("select valor, descricao, cidade, estado, lancamentos_etiqueta.banner_lancamento, lancamentos_etiqueta.nome_lancamento from lancamentos inner join
        lancamentos_etiqueta  on
        lancamentos.etiqueta_id = lancamentos_etiqueta.id where valor between '$request->left_value' and '$request->right_value'");
        
          return view('search_result',compact('all_products'))->render();
         // return view('teste',compact('all_products'))->render();
    }

    public function sort_by(Request $request)
    {
        if($request->sort_by == 'lowest_price'){
            $all_products = DB::select('select valor, descricao, cidade, estado, lancamentos_etiqueta.banner_lancamento, lancamentos_etiqueta.nome_lancamento from lancamentos inner join
            lancamentos_etiqueta  on
            lancamentos.etiqueta_id = lancamentos_etiqueta.id
            order by valor asc;');
            // $all_products = ProductFilter::orderBy('price','asc')->get();
        }
        if($request->sort_by == 'highest_price'){
            // $all_products = ProductFilter::orderBy('price','desc')->get();
            $all_products = DB::select('select valor, descricao, cidade, estado, lancamentos_etiqueta.banner_lancamento, lancamentos_etiqueta.nome_lancamento from lancamentos inner join
            lancamentos_etiqueta  on
            lancamentos.etiqueta_id = lancamentos_etiqueta.id
            order by valor desc;');
        }
        return view('search_result',compact('all_products'))->render();

    }

    
}
