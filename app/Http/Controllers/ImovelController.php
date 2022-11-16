<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImovelModel;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Redirect ;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;


class ImovelController extends Controller
{
    public function __construct()
    { $this->middleware('auth'); }
    public function create()
    {
    return view('imovel.create'); 
    
    }

    public function save(Request $request)
    {
        $request->validate([  
            'titulo' => 'required',
            'tipo' => 'required',
            'lancamento_status' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'ruapavimentada' => 'required',
            'quarto' => 'required',
            'banheiro' => 'required',
            'suite' => 'required',
            'garagem' => 'required',
            ]);
    $imovel = new ImovelModel;
    $imovel->titulo = $request->input('titulo');
    $imovel->tipo = $request->input('tipo');
    $imovel->lancamento_status = $request->input('lancamento_status');
    $imovel->estado = $request->input('estado');
    $imovel->cidade = $request->input('cidade');
    $imovel->bairro = $request->input('bairro');
    $imovel->rua = $request->input('rua');
    $imovel->numero = $request->input('numero');
    //$imovel->cep = $request->input('cep');
    $imovel->ruapavimentada = $request->input('ruapavimentada');
    $imovel->quarto = $request->input('quarto');
    $imovel->banheiro = $request->input('banheiro');
    $imovel->suite = $request->input('suite');
    $imovel->garagem = $request->input('garagem');
    $imovel->valor = $request->input('valor');
    $imovel->descricao = $request->input('descricao');
    $imovel->metrosconst = $request->input('mtsconst');
    if ($imovel->save()){
        return redirect()->back();
        } 
    }

    public function listar()
    {
        $imovel = ImovelModel::all();
        return view('imovel.list', ['imovel' => $imovel]);
    }

    public function imovelimages($id=NULL)
    {
        $imovel  = DB::table('imovel')->where('id', '=', $id)->get();
        $fotos = DB::table('imovel_fotos')->where('id_lancamento', '=', $id)->get();
        return view('imovel.image-imovel', ['imovel' => $imovel], ['fotos' => $fotos]);
    }


    public function uploadimovel(Request $request)
    {
        
        $validated = $request->validate(['arquivo.*' =>'required|mimes:jpeg,png,jpg,gif']);
       
        for($i=0; $i < count($request->allFiles()['arquivo']); $i++){
            $file = $request->file()['arquivo'][$i];
            $filename = $file->hashName();
            $file->storeAs('fotos', $filename);
            DB::table('imovel_fotos')->insert([
                'id_lancamento'     => $request->id,
                'foto_name'         =>  $filename
            ]);
        }
        return redirect()->back()->with('message',"Imagem enviada com sucesso");
    }


    public function editarimovel($id=NULL)
    {
    $imovel = DB::table('imovel')->where('id', '=', $id)->get();
    return view('imovel.edita-informacao',['lancamento' => $imovel]);
    }


    public function atualizaimovel(Request $request)
    {
    $request->validate([
    'tipo' => 'required',
    'lancamento_status' => 'required',
    'estado' => 'required',
    'cidade' => 'required',
    'ruapavimentada' => 'required',
    'quarto' => 'required',
    'banheiro' => 'required',
    'suite' => 'required',
    'garagem' => 'required',
    ]);
    $id = $request->input('id');
    
    $imovel = ImovelModel::find($id);
    
    $imovel->titulo = $request->input('nome');
    $imovel->tipo = $request->input('tipo');
    $imovel->lancamento_status = $request->input('lancamento_status');
    $imovel->estado = $request->input('estado');
    $imovel->cidade = $request->input('cidade');
    $imovel->bairro = $request->input('bairro');
    $imovel->rua = $request->input('rua');
    $imovel->numero = $request->input('numero');
    //$imovel->cep = $request->input('cep');
    $imovel->ruapavimentada = $request->input('ruapavimentada');
    $imovel->quarto = $request->input('quarto');
    $imovel->banheiro = $request->input('banheiro');
    $imovel->suite = $request->input('suite');
    $imovel->garagem = $request->input('garagem');
    $imovel->valor = $request->input('valor');
    $imovel->descricao = $request->input('descricao');
    $imovel->metrosconst = $request->input('mtsconst');
    if ($imovel->save()){
    return redirect()->route('imovel-novo', ['id' => $request->input('id')]);
    }   
    }

    public function editarimovelimagem($id = NULL)
    {
    $fotos = DB::table('imovel_fotos')->where('id_lancamento', '=', $id)->get();
    $etiqueta =  DB::table('imovel')->where('id', '=', $id)->first();

    $data = [
        'fotos' => $fotos,
        'etiqueta' => $etiqueta,
        'id'   => $id
    ];
    return view('imovel.edit-image',['data' => $data]);
    }

    public function destacar($id)
    {
    $fotos =  DB::table('imovel_fotos')->where('id', '=', $id)->first();
    if ($fotos->destaque == 0)
    {
    DB::table('imovel_fotos')->where('id', $id)->update(['destaque' => 1]);
    return redirect()->back();
    }else{
    DB::table('imovel_fotos')->where('id', $id)->update(['destaque' => 0]);
    return redirect()->back();
    }
    }

    public function apagarimovel($id=NULL)
    {
    if ($deleted = DB::table('imovel_fotos')->where('id', $id)->delete())
    {
    return redirect()->back();
    }
    }

    public function deletarimovel($id=NULL)
    {
    if ($deleted = DB::table('imovel')->where('id', $id)->delete())
    {
    return redirect()->back();
    }
    }
    
}
