<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" type="text/css"/>
    <script src="{{ asset('js/script.js') }}" async></script>
</head>
<body class="bg-[#170448] h-screen">
<div class="flex h-full max-md:flex-col">
    <aside class="w-64 bg-blue-950 shadow-md px-4 py-6 flex flex-col shadow-gray-600 max-md:hidden">
        <div class="mb-8 text-2xl font-bold text-blue-700 text-center">
            <a href="{{route('alunos.dashboard')}}" class="flex items-center justify-center px-1">
                <img src="{{ asset('img/logo.png') }}" alt="Code Masters" class="max-w-[200px]"/>
            </a>
        </div>
        <nav class="flex-1 space-y-4 text-gray-300">
            <a href="{{ route('alunos.dashboard') }}"
               class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Dashboard</a>
            <a href="#" class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Meus Cursos</a>
            <a href="{{ route('alunos.cursos') }}" class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Todos
                os Cursos</a>
            <a href="#" class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Perfil</a>
            <a href="#" class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Mensagens</a>
            <a href="{{ route('logout') }}"
               class="block py-2 px-4 rounded hover:bg-red-500 text-red-500 hover:text-white mt-auto">Terminar
                Sessão</a>
        </nav>
    </aside>

    <header class="flex w-full flex-row bg-blue-950 md:hidden px-3 py-5 content-center justify-between gap-3">
        <a href="{{ route('alunos.dashboard') }}">
            <img class="h-12 w-auto" src="{{ asset('img/logo.png') }}" alt="Code Masters"/>
        </a>

        <button class="hover:cursor-pointer" onclick="showSidebar()">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                 fill="#e3e3e3">
                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
            </svg>
        </button>

        <div id="sidebar" class="bg-blue-950 px-3">
            <div class="p-3">
                <button class="hover:cursor-pointer" onclick="closeSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                         fill="#e3e3e3">
                        <path
                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                    </svg>
                </button>
            </div>

            <nav class="flex-1 space-y-4 text-gray-300 flex flex-col w-full">
                <a href="{{ route('alunos.dashboard') }}"
                   class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Dashboard</a>
                <a href="#" class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Meus Cursos</a>
                <a href="{{ route('alunos.cursos') }}"
                   class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Todos
                    os Cursos</a>
                <a href="#" class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Perfil</a>
                <a href="#" class="block py-2 px-4 rounded hover:text-white hover:bg-blue-900">Mensagens</a>
                <a href="{{ route('logout') }}"
                   class="block py-2 px-4  rounded hover:bg-red-500 text-red-500 hover:text-white mt-auto mb-3">Terminar
                    Sessão</a>
            </nav>
        </div>
    </header>

    <main class="flex-1 p-6 overflow-auto">
        @yield('main')
    </main>
</div>
</body>
</html>
