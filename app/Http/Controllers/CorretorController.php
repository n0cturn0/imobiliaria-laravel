<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorretorController extends Controller
{
    public function create()
    {
        return view('corretor.create');
    }

    public function list()
    {
        return view('corretor.corretores-list');
    }

}
