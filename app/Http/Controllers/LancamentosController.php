<?php

namespace App\Http\Controllers;

use App\Models\LancamentoImageModel;
use App\Models\Lancamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Redirect ;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
class LancamentosController extends Controller
{

    public function __construct()
    { $this->middleware('auth'); }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function contatoadmin()
    {
       $contato = DB::table('contato')->get();
       return view('vendas.vendas', compact('contato'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('lancamento.create');
    }

    public function list()
    {
    $etiquetas = DB::table('lancamentos_etiqueta')->distinct()->get();
    return view('lancamento.list' , ['etiquetas' => $etiquetas]);
    }

    public function apagar($id='Null')
    {
        if ($deleted = DB::table('lancamentos_etiqueta')->where('id', $id)->delete())
    {
    return redirect()->back();
    }
    }

    public function crialancamento($id=NULL)
    {
                //Verifica se ja esta configurado
                $lancamentoconfig  = DB::table('lancamentos')->where('etiqueta_id', '=', $id)->get();
                
                //Pega informações para etiqueta
                $lancamento =  DB::table('lancamentos_etiqueta')->where('id', '=', $id)->get();
        
                switch ($lancamentoconfig->count()) {
                case 0:
                foreach ($lancamento as  $value) {
                $lancamento = $value->nome_lancamento;
                $id =$value->id;
                }
                return view('lancamento.crialancamento',['lancamento' => $lancamento], ['id' => $id]);
                break;
            
                default:
                $fotos =  DB::table('lancamentos_fotos')->where('id_lancamento', '=', $id)->get();
                $etiqueta =  DB::table('lancamentos_etiqueta')->where('id', '=', $id)->get();
                $informacao = DB::table('lancamentos')->where('etiqueta_id', '=', $id)->first();
                $data = [
                    'fotos' => $fotos,
                    'etiqueta' => $etiqueta,
                    'informa'   => $informacao
                ];
                foreach ($lancamento as  $value) { $lancamento = $value->nome_lancamento; $id =$value->id; }
            
                if($fotos->count() > 0){
                    return view('lancamento.image-lancamento',['data' => $data], ['id' => $id]);
                } else {
                    return view('lancamento.image-lancamento',['data' => $data],['id' => $id]);
                }
                
                break;
        }

      
    }

    
    public function upload(Request $request)
    {
        $validated = $request->validate(['arquivo.*' =>'required|mimes:jpeg,png,jpg,gif']);
       
        for($i=0; $i < count($request->allFiles()['arquivo']); $i++){
            $file = $request->file()['arquivo'][$i];
            $filename = $file->hashName();
            $file->storeAs('lancamentos', $filename);
            DB::table('lancamentos_fotos')->insert([
                'id_lancamento'     => $request->id,
                'foto_name'         =>  $filename
            ]);
        }
        return redirect()->back()->with('message',"Imagem enviada com sucesso");
    }

    public function novolancamento(Request $request)
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
    $lancamento = new Lancamentos();
    $lancamento->etiqueta_id = $request->input('id');
    $lancamento->nome = $request->input('nome');
    $lancamento->id_empreeendimento = 0;
    $lancamento->lancamento_status = $request->input('lancamento_status');
    $lancamento->estado = $request->input('estado');
    $lancamento->cidade = $request->input('cidade');
    $lancamento->bairro = $request->input('bairro');
    $lancamento->rua = $request->input('rua');
    $lancamento->numero = $request->input('numero');
    $lancamento->ruapavimentada = $request->input('ruapavimentada');
    $lancamento->tipo = $request->input('tipo');
    $lancamento->quarto = $request->input('quarto');
    $lancamento->banheiro = $request->input('banheiro');
    $lancamento->suite = $request->input('suite');
    $lancamento->garagem = $request->input('garagem');
    $lancamento->metrosconst = $request->input('mtsconst');
    $lancamento->valor = $request->input('valor');
    $lancamento->descricao = $request->input('descricao');
    if ($lancamento->save()){
    return redirect()->back();
    }     
    }

    public function editarlancamento($id=NULL)
    {
    $lancamento = DB::table('lancamentos')->where('etiqueta_id', '=', $id)->get();
    return view('lancamento.edita-informacao',['lancamento' => $lancamento]);
    }

    public function atualizalancamento(Request $request)
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
    $lancamento = Lancamentos::find($id);
    $lancamento->nome = $request->input('nome');
    $lancamento->lancamento_status = $request->input('lancamento_status');
    $lancamento->estado = $request->input('estado');
    $lancamento->cidade = $request->input('cidade');
    $lancamento->bairro = $request->input('bairro');
    $lancamento->rua = $request->input('rua');
    $lancamento->numero = $request->input('numero');
    $lancamento->ruapavimentada = $request->input('ruapavimentada');
    $lancamento->tipo = $request->input('tipo');
    $lancamento->quarto = $request->input('quarto');
    $lancamento->banheiro = $request->input('banheiro');
    $lancamento->suite = $request->input('suite');
    $lancamento->garagem = $request->input('garagem');
    $lancamento->metrosconst = $request->input('mtsconst');
    $lancamento->valor = $request->input('valor');
    $lancamento->descricao = $request->input('descricao');
    if ($lancamento->save()){
    return redirect()->route('lancamento-novo', ['id' => $request->input('etiqueta')]);
    }   
    }

    public function editarimagem($id = NULL)
    {
    $fotos = DB::table('lancamentos_fotos')->where('id_lancamento', '=', $id)->get();
    $etiqueta =  DB::table('lancamentos_etiqueta')->where('id', '=', $id)->first();
    return view('lancamento.edit-image',['fotos' => $fotos],['etiqueta' => $etiqueta]);
    }

    public function apagarimagem($id=NULL)
    {
    if ($deleted = DB::table('lancamentos_fotos')->where('id', $id)->delete())
    {
    return redirect()->back();
    }
    }

    public function destacarimagem($id)
    {
    $fotos =  DB::table('lancamentos_fotos')->where('id', '=', $id)->first();
    if ($fotos->destaque == 0)
    {
    DB::table('lancamentos_fotos')->where('id', $id)->update(['destaque' => 1]);
    return redirect()->back();
    }else{
    DB::table('lancamentos_fotos')->where('id', $id)->update(['destaque' => 0]);
    return redirect()->back();
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lancamentos  $lancamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Lancamentos $lancamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lancamentos  $lancamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Lancamentos $lancamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lancamentos  $lancamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lancamentos $lancamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lancamentos  $lancamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lancamentos $lancamentos)
    {
        //
    }
}
