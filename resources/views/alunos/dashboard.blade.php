@extends('app.layout')
@section('title','Dashboard')
@section('stylesheets')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
@endsection
@section('content')
    @if(session('aluno'))
        <p>Bem-vindo, {{ session('aluno')->nome }}!</p>
    @else
        <p>Não estás autenticado.</p>
    @endif
@endsection
