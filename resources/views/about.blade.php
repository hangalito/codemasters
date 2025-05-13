@extends('app.layout')
@section('title','Sobre Nós')
@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
@endsection
@section('content')
    <h1 class="text-2xl text-green-400 font-bold text-center mt-9 mb-9 uppercase">Saiba mais sobre a plataforma</h1>
    <div class="text-white flex flex-row flex-nowrap items-center not-md:flex-col not-xs:flex-wrap">
        <img class="w-2xl rounded-full p-6" src="{{asset('img/alunos.jpg')}}" alt="Alunos">
        <div class="text-justify p-9">
            <p> A Code Masters acredita que o conhecimento é o maior valor.</p>
            <p>
                Fornecemos nosso Método de Ensino Interativo às mais diversas áreas de Programação.
                Com uma comunidade ativa e ferramentas colaborativas, os estudantes podem trocar ideias e resolver
                problemas
                juntos. Nossa missão é democratizar o acesso ao aprendizado de programação e formar profissionais
                capacitados.
            </p>
        </div>
    </div>
@endsection
