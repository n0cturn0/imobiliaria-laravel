<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CorretorModel;
use Livewire\WithFileUploads;
class CorretorModulo extends Component
{
    use WithFileUploads;
    public $photo, $nomedocorretor, $emailcorretor, $telefonecorretor;
    protected $rules = [
        'nomedocorretor' => 'required|min:6',
        'emailcorretor' => 'required|email',
        'telefonecorretor' => 'required',
        'photo' => 'image|max:1024', // 1MB Max
    ];
    public function render()
    {
        return view('livewire.corretor-modulo');
    }

    public function save()
    {
        
        $this->validate();
        $file =$this->photo;
        $filename = $file->hashName();
        $this->photo->store('public/corretor');  
        
        $corretor = new CorretorModel;
        $corretor->corretor_nome = $this->nomedocorretor;
        $corretor->corretor_foto = $filename;
        $corretor->email = $this->emailcorretor;
        $corretor->telefone = $this->telefonecorretor;
        $corretor->status = 0;
        $corretor->save();
        session()->flash('message', 'O corretor foi cadastrado com sucesso');
        $this->reset();
        $this->emit('alert_remove');
        return;
    }
}
