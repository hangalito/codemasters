@extends('alunos.dashboard.template')

@section('main')
    <h1 class="text-2xl text-white font-semibold mb-6">Bem vindo de volta, {{ session('aluno')->username }}</h1>

    <!-- Cursos listados -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Curso Exemplo -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-bold mb-2">Curso de Programacão em Python</h2>
            <p class="text-sm text-gray-600">Duração: 3 semanas</p>
            <p class="text-sm text-gray-600">Início: 6 de Maio</p>
            <a href="#" class="text-blue-600 hover:underline mt-2 block">Ver Detalhes</a>
        </div>

        <!-- Repetir para mais cursos -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-bold mb-2">Curso de HTML e CSS</h2>
            <p class="text-sm text-gray-600">Duração: 2 semanas</p>
            <p class="text-sm text-gray-600">Início: 13 de Maio</p>
            <a href="#" class="text-blue-600 hover:underline mt-2 block">Ver Detalhes</a>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-bold mb-2">Curso de Lógica de Programação</h2>
            <p class="text-sm text-gray-600">Duração: 4 semanas</p>
            <p class="text-sm text-gray-600">Início: 20 de Maio</p>
            <a href="#" class="text-blue-600 hover:underline mt-2 block">Ver Detalhes</a>
        </div>
    </div>
@endsection
