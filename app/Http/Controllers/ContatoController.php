<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }
}
