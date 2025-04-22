@extends('auth.template')
@section('title','Criar Conta')
@section('stylesheet',asset('css/register.css'))
@section('main')
    <div class="welcome-section">
        <h1 class="welcome-msg">Seja bem-vindo à Code Masters</h1>
        <img class="welcome-img" src="{{asset('img/woman-in-a-desktop.png')}}" alt="Mulher num computador">
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('perform-registration') }}" method="post">
        @csrf
        <div class="container-fluid">
            <h1 class="form-title">Criar conta</h1>
            <div class="container-fields">
                <div class="field">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required
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
