<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LancamentoCreate extends Component
{
    public $nomedoempreendimento;
    public function render()
    {
        return view('livewire.lancamento-create');
    }

    public function save()
    {

        dd($this->nomedoempreendimento);
    }
}
