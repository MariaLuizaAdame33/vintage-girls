<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'profissional_id',
        'cliente_id',
        'servico_id',
        'horario_data',
        'tipo_pagamento',
        'valor'
    ];
}
