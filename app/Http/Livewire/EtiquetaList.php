<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class EtiquetaList extends Component
{


    public function render()
    {

        return view('livewire.etiqueta-list' , ['etiquetas' => $etiquetas = DB::table('lancamentos_etiqueta')->distinct()->get()]);
    }

    public function createlancamento()
    {
    return view('livewire.lancamento-create');
    }
}
