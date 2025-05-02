@extends('alunos.dashboard.template')

@section('title', 'Dashboard do Aluno')
@section('main')
    <h1 class="text-3xl text-white font-semibold mb-6">Bem vindo de volta, {{ session('aluno')->username }}</h1>

    <h2 class="text-2xl text-white font-semibold mb-3">Cursos inscritos</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach(\App\Models\Aluno::find(session('aluno')->id)->matriculas as $matricula)
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-lg font-bold mb-2">Curso de {{ $matricula->curso->nome }}</h2>
                <p>Duração: <span class="font-mono">placeholder</span></p>
                <p class="text-sm text-gray-600">Início: {{ $matricula->data_matricula }}</p>
            </div>
        @endforeach
    </div>
@endsection
