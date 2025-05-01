<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{

    protected $fillable = [
        "id",
        "desc"
    ];

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }
}
