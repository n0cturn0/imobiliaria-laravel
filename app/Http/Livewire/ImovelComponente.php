<?php

namespace App\Http\Livewire;

use Livewire\Component;


class ImovelComponente extends Component
{
    public $titulo, $tipo, $lancamento_status, $estado, $cidade, $bairro, $rua, 
    $numero, $cep, $ruapavimentada, $quarto, $banheiro, $suite, $garagem, $valor, $mtsconst, $descricao;
    //Validação
    protected $rules = [
        'titulo' => 'required|min:6',
    ];
    
    public function render()
    {
        return view('livewire.imovel-componente');
    }

   


}
