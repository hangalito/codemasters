@extends('app.layout')
@section('title','Nossos Cursos')
@section('stylesheets')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="{{asset('js/script.js')}}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection
@section('content')
    <section
            class="min-h-screen text-white gap-6 p-12 not-sm:p-6 items-center min-sm:flex min-sm:flex-row min-lg:flex-nowrap max-lg:flex-wrap-reverse max-md:flex">
        <div class="hero-content flex flex-col max-w-2xl flex-wrap gap-1">
            <h1 class="text-3xl capitalize font-bold">Bem-vindo ao nosso sistema de ensino!</h1>
            <p>
                Explore nossos cursos e aprenda as linguagens de programação forma interativa e divertida.
                Escolha entre vídeos e PDFs aprimorar seus conhecimentos. Nosso site oferece cursos de
                programação com materiais em PDF e vídeos do YouTube, tornando o aprendizado acessível e
                eficiente para todos os níveis de conhecimento.
            </p>
        </div>
        <div>
            <img src="{{asset('img/welcome.png')}}" alt="Boas vindas">
        </div>
    </section>
@endsection
