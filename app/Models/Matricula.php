<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $fillable = [
        'curso_id',
        'aluno_id',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
