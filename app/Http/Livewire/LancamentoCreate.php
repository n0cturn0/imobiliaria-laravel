<?php

namespace App\Models;
namespace App\Http\Livewire;
use App\Models\LancamentoEtiquetaModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;


class LancamentoCreate extends Component
{
    use WithFileUploads;
    public $nomedoempreendimento, $photo, $empreendimento_id;

    protected $rules = [
        'nomedoempreendimento' => 'required|min:2',
    ];
    protected $messages = [
        'nomedoempreendimento.required' => 'O campo com o nome do empreedimento não pode ficar em branco.'
    ];




    public function render()
    {
        $empreendimento = DB::select('select * from empreedimentos');
        return view('livewire.lancamento-create', ['empreendimento' => $empreendimento]);
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
        $file =$this->photo;
        $filename = $file->hashName();
        $this->photo->store('banner');
        
       
        $etiqueta = new LancamentoEtiquetaModel;
       
        $etiqueta->nome_lancamento = $this->nomedoempreendimento;
        $etiqueta->banner_lancamento = $filename;
        $etiqueta->id_empreeendimento = $this->empreendimento_id;
        $etiqueta->save();
        session()->flash('message', 'Lançamento Inserido com Sucesso');
        $this->reset();
        $this->emit('alert_remove');
        return;
    }
   









    }
