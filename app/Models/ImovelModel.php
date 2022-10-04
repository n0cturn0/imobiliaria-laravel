<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImovelModel extends Model
{
    protected $table = 'imovel';
    protected $fillable = [
        'titulo',
        'status',
        'lancamento_status',
        'estado',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'ruapavimentada',
        'tipo',
        'banheiro',
        'suite',
        'garagem',
        'quarto',
        'metrosconst',
        'valor',
        'descricao'
        ];
    public $timestamps = true;
}
