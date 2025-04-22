<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }
}
