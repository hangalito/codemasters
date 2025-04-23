@extends('auth.template')
@section('title','Criar Conta')
@section('stylesheet')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection
@section('main')
    <div class="welcome-section">
        <h1 class="welcome-msg text-3xl font-semibold text-center">Seja bem-vindo à Code Masters</h1>
        <img class="welcome-img" src="{{asset('img/woman-in-a-desktop.png')}}" alt="Mulher num computador">
    </div>
    <form action="{{ route('perform-registration') }}" method="post">
        @csrf
        <div class="container-fluid">
            <h1 class="form-title text-3xl font-semibold">Criar conta</h1>

            @if($errors->any())
                <div class="danger text-red-500">
                    @error('email')
                    <p class="text-red-600 font-sans text-center">Este email já está em uso. Por favor, tente outro.</p>
                    @enderror

                    @error('username')
                    <p class="text-red-600 font-sans text-center">
                        {{ $message }}
                    </p>
                    @enderror

                    @error('password')
                    <p class="text-red-600 font-sans text-center">A palavra-passe deve ter pelo menos 8 caracteres.</p>
                    @enderror

                    @error('password_confirmation')
                    <p class="text-red-600 font-sans text-center">As palavras-passe não coincidem.</p>
                    @enderror
                </div>
            @endif

            <div class="container-fields font-sans">
                <div class="field">
                    <label for="nome">Nome</label>
                    <input class="font-sans" type="text" id="nome" name="nome" required
                           placeholder="Digite o seu nome">
                </div>
                <div class="field">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" id="sobrenome" name="sobrenome" required placeholder="Digite o seu sobrenome">
                </div>
                <div class="field">
                    <label for="data-nascimento">Data de nascimento</label>
                    <input type="date" id="data-nascimento" name="data-nascimento" required
                           placeholder="Digite a sua data de nascimento">
                </div>
                <div class="field">
                    <label for="sexo">Sexo</label>
                    <select id="sexo" name="sexo" required>
                        @foreach($sexos as $sexo)
                            <option value="{{ $sexo->id }}">{{ $sexo->desc }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Digite o seu melhor email" required>
                </div>
                <div class="field">
                    <label for="username">Nome de utilizador</label>
                    <input type="text" id="username" name="username" placeholder="Digite o seu nome de utilizador"
                           required>
                </div>
                <div class="field">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required placeholder="Digite uma senha">
                </div>
                <div class="field">
                    <label for="password_confirmation">Confirmar Senha</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                           placeholder="Confirme a senha">
                </div>
            </div>
            <button type="submit" id="submit">Criar conta</button>

            <p class="login-tip">
                Já tem uma conta Desenvolvedor?
                <a class="login-link" href="{{route('login')}}">Iniciar sessão</a>
            </p>
        </div>
    </form>
@endsection
