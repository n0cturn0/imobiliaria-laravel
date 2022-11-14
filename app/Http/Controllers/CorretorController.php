<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CorretorController extends Controller
{
    public function __construct()
    { $this->middleware('auth'); }
    public function create()
    {
        return view('corretor.create');
    }

    public function list()
    {
        $corretores = DB::table('corretor')->get();
        return view('corretor.corretores-list',['corretores'=>$corretores]);
    }

    public function apagar($id)
    {
        DB::table('corretor')->where('id',$id)->delete();
        return redirect()->route('corretores-list');
        
    }

}
