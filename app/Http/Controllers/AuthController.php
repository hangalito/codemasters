<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Escolaridade;
use App\Models\Sexo;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        ], [
            'email.unique' => 'Este email já está em uso.',
            'username.unique' => 'Este nome de utilizador já está em uso.',
            'password.confirmed' => 'As palavras-passe não coincidem.',
        ]);

        Aluno::create([
            'nome' => $validated['nome'],
            'sobrenome' => $validated['sobrenome'],
            'data_nascimento' => $validated['data-nascimento'],
            'sexo_id' => $validated['sexo'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']),
        ]);

        return redirect(route('login'));
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $aluno = Aluno::where('email', $credentials['email'])->first();

        if (!$aluno || !Hash::check($credentials['password'], $aluno->password)) {
            return back()->with('error', 'O email ou a palavra passe introduzidos não estão correctos');
        }

        session(['aluno' => $aluno]);

        return redirect()->route('dashboard');
    }
}
