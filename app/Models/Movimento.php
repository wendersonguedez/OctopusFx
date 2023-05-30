<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{

    use HasFactory;

    protected $table = "movimentos";

    protected $fillable = [
        'tipo_movimento',
        'nome',
        'descricao',
        'data_movimento',
        'data_vencimento',
        'valor',
        'status',
        'forma_pagamento_id',
        'user_id',
        'categoria_id'
    ];

    public function categorias()
    {
        return $this->belongsTo(Categorias::class, 'categoria_id', 'id');
    }

    public function forma_pagamento()
    {
        return $this->belongsTo(FormaPagamento::class, 'forma_pagamento_id', 'id');
    }
}
