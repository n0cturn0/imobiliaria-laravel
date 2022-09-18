<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lancamentos extends Model
{
//    use HasFactory;
    protected $table = 'lancamentos';
    protected $fillable = [
        'etiqueta_id',
        'nome',
        'status' => 1,
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
