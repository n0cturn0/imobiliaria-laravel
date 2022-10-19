<?php

namespace App\Http\Livewire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Empreedimento;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

use Livewire\Component;

class EmpreendimentoCreate extends Component
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
        return view('livewire.empreendimento-create');
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
        $file =$this->photo;
        $filename = $file->hashName();
        $this->photo->store('public/empreendimento');
        
       
        $etiqueta = new Empreedimento;
       
        $etiqueta->nome_empreedimento = $this->nomedoempreendimento;
        $etiqueta->banner_lancamento = $filename;
        $etiqueta->status = 0;
        $etiqueta->save();
        session()->flash('message', 'Lançamento Inserido com Sucesso');
        $this->reset();
        $this->emit('alert_remove');
        return;
    }
}
