<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [
        'setor',
        'nivel',
        'salario_min',
        'salario_max',
        'descricao',
    ];

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class);
    }
}
