<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

Builder::macro('whereLike', function($data) {
    $this->where(function($query) use ($data) {
        foreach(array_keys($data) as $key) {
            $query->where($key, 'LIKE', "%{$data[$key]}%");
        }
    });
    return $this;
});

class cliente extends Model
{

    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'cep',
        'id_estado',
        'cidade',
        'logradouro',
        'bairro',
        'numero',
        'complemento',
        'entRet',
        'id_sabor',
        'observacao'
    ];

    protected $casts = [
        'id_estado' => 'int',
        'numero' => 'int',
        'id_sabor' => 'int'
    ];

    
}
