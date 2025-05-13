@extends('app.layout')
@section('title','Suporte')
@section('stylesheets')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="{{asset('js/script.js')}}" defer></script>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
@endsection
@section('content')
    <div class="p-6">
        <h1 class="text-blue-950 text-3xl font-semibold">Suporte</h1>
        <p>
            Se você tiver dúvidas ou precisar de ajuda, estamos aqui para assisti-lo. Veja as opções de suporte abaixo.
        </p>
        <h2 class="text-blue-950 text-2xl font-semibold">Perguntas Frequentes (FAQ)</h2>

        <dl>
            <dt class="font-semibold mt-3">Como faço para me inscrever num curso?</dt>
            <dd class="ms-3 font-light">
                Para se inscrever em um curso, vá até a página de cursos, escolha o curso de seu interesse e siga as
                instruções de inscrição.
            </dd>

            <dt class="font-semibold mt-3">Esqueci minha senha, como redefinir?</dt>
            <dd class="ms-3 font-light">
                Clique na opção "Esqueceu sua senha?" na página de login e siga as instruções enviadas para o seu email.
            </dd>

            <dt class="font-semibold mt-3">
                Os cursos possuem certificado?
            </dt>
            <dd class="ms-3 font-light">
                Sim, ao concluir o curso, você pode solicitar o certificado digital pela própria plataforma.
            </dd>
        </dl>
    </div>

    <!--
        NOTA:
            Estas divs estão vazias puramente por efeito de estilo.
            Estas divs são colocadas aqui para criar uma linha divisória
            entre o formulário a baixo e a secção de perguntas frequentes acima.
    -->
    <div class="w-full ps-3 pe-3">
        <div class="border-gray-300 border-b-2"></div>
    </div>

    <div class="p-6">
        <form method="post">
            <h3 class="text-blue-950 text-2xl font-semibold">Fale connosco</h3>

            <div class="flex flex-wrap flex-col">
                <label for="nome" class="text-sm p-1">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Digite o seu nome"
                       class="text-sm p-2 rounded-md border-2 border-gray-300">
            </div>

            <div class="flex flex-wrap flex-col">
                <label for="email" class="text-sm p-1">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite o seu melhor email"
                       class="text-sm p-2 rounded-md border-2 border-gray-300">
            </div>

            <div class="flex flex-wrap flex-col">
                <label for="email" class="text-sm p-1">Assunto</label>
                <input type="text" id="assunto" name="assunto" placeholder="Digite o assunto"
                       class="text-sm p-2 rounded-md border-2 border-gray-300">
            </div>

            <div class="flex flex-wrap flex-col">
                <label for="email" class="text-sm p-1">Mensagem</label>
                <textarea id="content" name="content" placeholder="Como podemos ajudá-lo?"
                          cols="6" rows="6" class="text-sm p-2 rounded-md border-2 border-gray-300"></textarea>
            </div>

            <button
                class="bg-blue-900 text-white w-full p-2 mt-3 mb-3 rounded-md hover:cursor-pointer hover:bg-blue-900"
                disabled>
                Enviar
            </button>
        </form>
    </div>
@endsection
