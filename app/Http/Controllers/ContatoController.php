<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ContatoModel;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        
        $validated = $request->validate([
            'email' => 'required',
            'nome' => 'required',
            'telefone' => 'required',
            'mensagem' => 'required|min:10',
        ]);
       
       
        $contato = new ContatoModel();
        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->telefone = $request->telefone;
        $contato->mensagem = $request->mensagem;
        $contato->id_imovel = $request->id_lancamento;
        $contato->tipo = $request->tipo;
       
        if($contato->save()){
        return back()->with([
        'message' => 'Obrigado!! Em breve entraremos em contato!',
        ]);
        }

    
}
}
