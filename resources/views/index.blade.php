@extends('app.layout')
@section('title','Início')
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    @vite('resources/css/app.css')
@endsection
@section('content')
    <section id="top"
             class="min-h-screen text-white gap-6 p-12 not-sm:p-6 items-center min-sm:flex min-sm:flex-row min-lg:flex-nowrap max-lg:flex-wrap-reverse max-md:flex">
        <div class="hero-content flex flex-col max-w-2xl flex-wrap gap-1">
            <h1 class="text-4xl">Desejas tornar-te um desenvolvedor de software?</h1>
            <h2 class="text-3xl text-gray-300">Temos um convite para ti!</h2>
            <p class="text-justify">
                Transforme sua paixão por tecnologia em uma carreira de sucesso! No nosso site, oferecemos uma
                jornada completa, desde os fundamentos até as técnicas mais avançadas de programação com materiais
                de alta qualidade, incluindo PDFs detalhados e vídeos tutoriais, você terá todas as ferramentas
                necessárias para se destacar no mundo da programação.
            </p>
            <a class="bg-green-600 text-2xl text-center max-w-2/6 pt-1.5 pb-1.5 rounded-md mt-3 mb-3 hover:bg-green-800 transition-colors not-sm:min-w-full"
               href="{{route('register')}}">
                Inscrever-se
            </a>
        </div>
        <div class="hero-img-container">
            <img src="{{asset('img/tech-man.png')}}" alt="Futurista">
        </div>
    </section>

    <section id="cursos" class="min-h-screen p-12 not-sm:p-6">
        <h1 class="text-white text-3xl text-center uppercase font-semibold">Nossos cursos</h1>
        <div class="grid container-courses gap-y-6 gap-x-3">
            @foreach($cursos as $curso)
                <div
                    class="grid grid-cols-1 border-2 border-green-500 place-items-center px-12 rounded-md hover:bg-blue-950 hover:scale-105 transition-all">
                    <img class="m-1 max-w-[100px]" src="{{asset('img/cursos/'.$curso->url_capa)}}"
                         alt="Curso {{ $curso->nome }}">
                    <p class="text-white text-2xl">
                        {{$curso->nome}}
                    </p>
                </div>
            @endforeach
        </div>
    </section>

    <section id="porque" class="min-h-screen m-3.5 not-sm:m-1">
        <h1 class="text-white text-3xl text-center uppercase font-semibold">Por que nos escolher?</h1>
        <div
            class="ps-9 pe-9 mt-3 mb-3 flex flex-row flex-nowrap scroll-auto gap-9 overflow-x-scroll max-w-full justify-center">
            <div class="bg-blue-900 max-w-[250px] rounded-md p-2.5 pt-12 pb-12 flex flex-col gap-1.5">
                <img class="rounded-full max-w-[200px]" src="{{ asset('img/qualidades/graduacao.png') }}"
                     alt="Graduação">
                <h1 class="text-white text-xl font-bold text-center">Aprendizado Qualitativo</h1>
                <p class="text-white text-justify">
                    Obtenha formações solidas das principais linguagens de programação
                </p>
            </div>

            <div class="bg-blue-900 max-w-[250px] rounded-md p-2.5 pt-12 pb-12 flex flex-col gap-1.5">
                <img class="rounded-full max-w-[200px]" src="{{ asset('img/qualidades/equipe.png') }}"
                     alt="Trabalho em equipe">
                <h1 class="text-white text-xl font-bold text-center">Colaboração Em Equipe</h1>
                <p class="text-white text-justify">
                    Trabalhe em projectos colaborativos e teste o seu desenvolvimento em grupo
                </p>
            </div>

            <div class="bg-blue-900 max-w-[250px] rounded-md p-2.5 pt-12 pb-12 flex flex-col gap-1.5">
                <img class="rounded-full max-w-[200px]" src="{{ asset('img/qualidades/networking.png') }}"
                     alt="Networking">
                <h1 class="text-white text-xl font-bold text-center">Recursos avançados</h1>
                <p class="text-white text-justify">
                    Acesse uma ampla variedade de ferramentas e bibliotecas para aprofundar seu conhecimento
                </p>
            </div>

            <div class="bg-blue-900 max-w-[250px] rounded-md p-2.5 pt-12 pb-12 flex flex-col gap-1.5">
                <img class="rounded-full max-w-[200px] self-center" src="{{ asset('img/qualidades/security.png') }}"
                     alt="Segurança dos seus dados">
                <h1 class="text-white text-xl font-bold text-center">Segurança dos seus dados</h1>
                <p class="text-white text-justify">
                    Todos os seus dados serão protegidos, cuidamos com total Segurança os dados dos nossos usuarios
                </p>
            </div>
        </div>
    </section>
@endsection
