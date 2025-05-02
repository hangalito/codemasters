<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body class="bg-[#170448] h-screen">
<div class="flex h-full">
    <aside class="w-64 bg-blue-950 shadow-md px-4 py-6 flex flex-col shadow-gray-600">
        <div class="mb-8 text-2xl font-bold text-blue-700 text-center">
            <a href="{{route('alunos.dashboard')}}" class="flex items-center justify-center px-1">
                <img src="{{ asset('img/logo.png') }}" alt="Code Masters" class="max-w-[200px]"/>
            </a>
        </div>
        <nav class="flex-1 space-y-4 text-gray-300">
            <a href="{{ route('alunos.dashboard') }}" class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Dashboard</a>
            <a href="#" class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Meus Cursos</a>
            <a href="{{ route('alunos.cursos') }}" class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Todos os Cursos</a>
            <a href="#" class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Perfil</a>
            <a href="#" class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Mensagens</a>
            <a href="{{ route('logout') }}"
               class="block py-2 px-4 rounded hover:bg-red-500 text-red-500 hover:text-white mt-auto">Terminar Sessão</a>
        </nav>
    </aside>

    <main class="flex-1 p-6 overflow-auto">
        @yield('main')
    </main>
</div>
</body>
</html>
