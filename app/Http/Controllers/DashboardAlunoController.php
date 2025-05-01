<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

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
}
