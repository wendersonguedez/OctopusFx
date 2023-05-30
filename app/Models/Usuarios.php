<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{

    protected $table = 'Pessoas';

    protected $fillable = [
        'nome',
        'cpf',
        'data_nascimento',
        'email',
        'senha',
    ];

    protected $primaryKey = 'id';

    use HasFactory;
}
