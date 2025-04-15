@extends('auth.template')
@section('title','Criar Conta')
@section('stylesheet',asset('css/register.css'))
@section('main')
    <div class="welcome-section">
        <h1 class="welcome-msg">Seja bem-vindo à Code Masters</h1>
        <img class="welcome-img" src="{{asset('img/woman-in-a-desktop.png')}}" alt="Mulher num computador">
    </div>
    <form>
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
                    <input type="text" id="sobrenome" name="nome" required
                           placeholder="Digite o seu sobrenome">
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
                            <option value="{{$sexo}}">{{$sexo->desc}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="field">
                    <label for="bi">Número do BI</label>
                    <input type="text" id="bi" name="bi" required
                           placeholder="Digite o número do seu BI">
                </div>
                <div class="field">
                    <label for="escolaridade">Nível de escolaridade</label>
                    <select id="escolaridade" name="escolaridade">
                        @foreach($escolaridades as $escolaridade)
                            <option value="{{$escolaridade}}">{{$escolaridade->desc}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="field">
                    <label for="instituto">Nome da instituição</label>
                    <input type="text" id="instituto" name="instituto" required
                           placeholder="Digite o nome da instituição que frequentou"/>
                </div>
                <div class="field">
                    <label for="ano-fecho">Ano de conclusão</label>
                    <input type="number" min="1975" id="ano-fecho" name="ano-fecho" required
                           placeholder="Digite o ano em que concluiu o nível académico">
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
