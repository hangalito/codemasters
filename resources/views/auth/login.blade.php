@extends('auth.template')
@section('title','Iniciar Sessão')
@section('main')
    <div class="welcome-section">
        <h1 class="welcome-msg">Bem-vindo de volta!</h1>
        <img class="welcome-img" src="{{asset('img/man-with-laptop.png')}}" alt="Boas vindas"
             aria-label="Homem com um portátil">
    </div>

    <div class="form-login">
        <form action="#" method="POST">
            <div class="login-section">
                <h3 class="login-title">Iniciar sessão</h3>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Palavra-Passe" required>

                <button class="login-button" type="submit">Entrar</button>
                <p class="create-account">
                    Ainda não tem uma conta?
                    <a class="create-account-link" href="{{route('home')}}"> Criar uma conta grátis </a>
                </p>
            </div>
        </form>
    </div>
@endsection
