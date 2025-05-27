<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function funcionarios()
    {
        return $this->belongsToMany(Funcionario::class);
    }
}
