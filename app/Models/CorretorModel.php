<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorretorModel extends Model
{
    // use HasFactory;
    protected $table = 'corretor';
    protected $fillable = [
        'corretor_nome',
        'corretor_foto',
        'email',
        'telefone',
        'status'
    
    ];
}
