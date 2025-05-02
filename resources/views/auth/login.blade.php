@extends('auth.template')
@section('title','Iniciar Sessão')
@section('stylesheet')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('main')
    <div class="welcome-section">
        <h1 class="welcome-msg text-3xl text-center font-bold">Bem-vindo de volta!</h1>
        <img class="welcome-img" src="{{ asset('img/man-with-laptop.png') }}" alt="Boas vindas" aria-label="Homem com um portátil">
    </div>

    <form action="{{ route('perform-login') }}" method="POST">
        @csrf
        <div class="form-login font-sans">
            <h3 class="login-title text-2xl font-semibold">Iniciar sessão</h3>

            @if(session('error'))
                <p class="text-red-600 text-center mt-2 mb-3">{{ session('error') }}</p>
            @endif

            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Palavra-Passe" required>

            <button class="login-button" type="submit">Entrar</button>
            <p class="create-account">
                Ainda não tem uma conta?
                <a class="create-account-link" href="{{route('register')}}"> Criar uma conta grátis </a>
            </p>
        </div>
    </form>
@endsection
