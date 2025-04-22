<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Escolaridade;
use App\Models\Sexo;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerForm()
    {
        $sexos = Sexo::all();
        $escolaridades = Escolaridade::all();
        return view('auth.register', [
            'sexos' => $sexos,
            'escolaridades' => $escolaridades
        ]);
    }


    public function register(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'data-nascimento' => 'required|date',
            'sexo' => 'required|exists:sexos,id',
            'email' => 'required|email|unique:alunos,email',
            'username' => 'required|string|unique:alunos,username',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $bcrypt = new BcryptHasher();

        $aluno = Aluno::create([
            'nome' => $validated['nome'],
            'sobrenome' => $validated['sobrenome'],
            'data_nascimento' => $validated['data-nascimento'],
            'sexo_id' => $validated['sexo'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => $bcrypt->make($validated['password'])
        ]);

        return redirect(route('dashboard'))->with('aluno', $aluno);
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login()
    {
        $email = $_REQUEST['email'];
    }
}
