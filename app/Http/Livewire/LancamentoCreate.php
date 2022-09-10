<?php


namespace App\Http\Livewire;
use App\models\LancamentoEtiquetaModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
        $etiqueta = new LancamentoEtiquetaModel;
        $etiqueta->nome_lancamento = $this->nomedoempreendimento;
        $etiqueta->save();
        session()->flash('success_message', 'Lançamento Inserido com Sucesso');
        $this->reset();



    }
}
