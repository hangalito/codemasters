<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;

class DashboardAlunoController extends Controller
{
    public function dashboard()
    {
        return view('alunos.dashboard');
    }

    public function cursos()
    {
        $cursos = Curso::all();
        return view('alunos.cursos', compact('cursos'));
    }

    public function curso(int $id)
    {
        $matriculas = Aluno::find(session('aluno')->id)->matriculas();
        $curso = $matriculas->where('curso_id', $id)->first();
        if ($curso == null) {
            return redirect(route('alunos.dashboard'));
        }
        $curso = $curso->curso;
        return view('alunos.sala', compact('curso'));
    }
}
