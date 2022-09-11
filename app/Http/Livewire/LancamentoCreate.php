<?php


namespace App\Http\Livewire;
use App\models\LancamentoEtiquetaModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LancamentoCreate extends Component
{
    public $nomedoempreendimento;

    protected $rules = [
        'nomedoempreendimento' => 'required|min:2',
    ];
    protected $messages = [
        'nomedoempreendimento.required' => 'O campo com o nome do empreedimento não pode ficar em branco.'
    ];
//    protected $validationAttributes = [
//        'nomedoempreendimento' => 'O campo'
//    ];




    public function render()
    {
        return view('livewire.lancamento-create');
    }

    public function save()
    {
        $this->validate();

        $etiqueta = new LancamentoEtiquetaModel;
        $etiqueta->nome_lancamento = $this->nomedoempreendimento;
        $etiqueta->save();
        session()->flash('message', 'Lançamento Inserido com Sucesso');
        $this->reset();
        $this->emit('alert_remove');
        return;




    }
}
