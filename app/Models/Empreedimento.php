<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empreedimento extends Model
{
    // use HasFactory;
    protected $fillable = [
        'nome_empreedimento',
        'banner_lancamento',
        'status'
    ];
}
