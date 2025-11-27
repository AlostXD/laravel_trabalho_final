<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pocao extends Model
{
    protected $table = 'pocoes';

    protected $fillable = [
        'nome',
        'descricao',
        'nivel',
        'preco',
        'imagem',
    ];
}

