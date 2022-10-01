<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
    public function index()
    {
        $all_products = DB::select('select valor, descricao, cidade, estado, lancamentos_etiqueta.banner_lancamento, lancamentos_etiqueta.nome_lancamento from lancamentos inner join
        lancamentos_etiqueta  on
        lancamentos.etiqueta_id = lancamentos_etiqueta.id');
         return view('itshome',compact('all_products'));
         // return view('teste',compact('all_products'))->render();
    }


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
