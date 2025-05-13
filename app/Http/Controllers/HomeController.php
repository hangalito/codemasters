<?php

namespace App\Http\Controllers;

use App\Models\CursoDestaque;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $cursos = CursoDestaque::all();
        return view('index', [
            'cursos' => $cursos
        ]);
    }

    public function support()
    {
        return view('support');
    }
}
