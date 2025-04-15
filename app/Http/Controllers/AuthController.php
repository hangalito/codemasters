<?php

namespace App\Http\Controllers;

use App\Models\Escolaridade;
use App\Models\Sexo;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        $sexos = Sexo::all();
        $escolaridades = Escolaridade::all();
        return view('auth.register', [
            'sexos' => $sexos,
            'escolaridades' => $escolaridades
        ]);
    }

    public function login()
    {
        return view('auth.login');
    }
}
