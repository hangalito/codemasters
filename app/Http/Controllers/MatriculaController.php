<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function matricular(Curso $curso)
    {
         $aluno = session('aluno');
        Matricula::create([
            'aluno_id' => $aluno->id,
            'curso_id' => $curso->id
        ]);
    }
}
