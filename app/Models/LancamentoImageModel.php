<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LancamentoImageModel extends Model
{
    //use HasFactory;
    protected $table = 'lancamentos_fotos';
    protected $fillable = [
        'id_lancamento',
        'foto_name',
        'foto_descricao',
        'destaque'
    ];
    public $timestamps = true;
}
