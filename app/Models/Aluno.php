<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sobrenome',
        'data_nascimento',
        'sexo_id',
        'email',
        'username',
        'password',
    ];

    public function sexo()
    {
        return $this->belongsTo(Sexo::class);
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}
