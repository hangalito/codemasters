@extends('app.layout')
@section('title','Início')
@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    @vite('resources/css/app.css')
@endsection
@section('content')
    <div id="top" class="hero text-white flex gap-6 p-12 items-center">
        <div class="hero-content flex flex-col max-w-2xl flex-wrap gap-1">
            <h1 class="text-4xl">Desejas tornar-te um desenvolvedor de software?</h1>
            <h2 class="text-3xl text-gray-300">Temos um convite para ti!</h2>
            <p class="text-justify">
                Transforme sua paixão por tecnologia em uma carreira de sucesso! No nosso site, oferecemos uma
                jornada completa, desde os fundamentos até as técnicas mais avançadas de programação com materiais
                de alta qualidade, incluindo PDFs detalhados e vídeos tutoriais, você terá todas as ferramentas
                necessárias para se destacar no mundo da programação.
            </p>
            <a class="bg-green-600 text-2xl text-center max-w-2/6 pt-1.5 pb-1.5 rounded-md mt-3 mb-3 hover:bg-green-800 transition-colors"
               href="{{route('register')}}">
                Inscrever-se
            </a>
        </div>
        <div class="hero-img-container not-sm:hidden">
            <img class="transform-cpu" src="{{asset('img/tech-man.png')}}" alt="Futurista">
        </div>
    </div>
    <div id="cursos">
        <h1 class="text-white text-4xl text-center">Nossos cursos</h1>
        <div class="grid container-courses">
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
    </div>
@endsection
