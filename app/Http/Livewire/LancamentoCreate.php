<?php


namespace App\Http\Livewire;
use App\models\LancamentoEtiquetaModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class LancamentoCreate extends Component
{
    use WithFileUploads;
    public $nomedoempreendimento, $photo;

    protected $rules = [
        'nomedoempreendimento' => 'required|min:2',
    ];
    protected $messages = [
        'nomedoempreendimento.required' => 'O campo com o nome do empreedimento não pode ficar em branco.'
    ];




    public function render()
    {
        return view('livewire.lancamento-create');
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
        $file =$this->photo;
        $filename = $file->hashName();
        $this->photo->store('public/banner');
        
       
        $etiqueta = new LancamentoEtiquetaModel;
       
        $etiqueta->nome_lancamento = $this->nomedoempreendimento;
        $etiqueta->banner_lancamento = $filename;
        $etiqueta->save();
        session()->flash('message', 'Lançamento Inserido com Sucesso');
        $this->reset();
        $this->emit('alert_remove');
        return;
    }
   









    }
