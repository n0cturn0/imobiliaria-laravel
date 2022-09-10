<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LancamentoEtiquetaModel extends Model
{
//    use HasFactory;
    protected $table = 'lancamentos_etiqueta';
    protected $fillable = ['nome_lancamento', 'status' ];
    protected $attributes = [
        'status' => 0,
    ];

    public $timestamps = true;
}
