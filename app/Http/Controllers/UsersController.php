<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $image = array('a.jpg', 'b.jpg', 'c.jpg', 'd.jpg', 'aa.jpg', 'aa.jpg', 'aaa.jpg', 'b.jpg', 'bg.jpg', 'c.jpg', 'd.jpg', 'z.jpg');
        $capa = array_rand($image);
        $show = $image[$capa];
         return view('users.index', ['capa' => $show]);
      
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        //    dd('Logado com sucesso');
        return redirect('lancamento-list');
        } else {
            return redirect()->back()->with('danger', 'Email ou senha incorretos');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('painel');
    }




}
