@extends('alunos.dashboard.template')
@section('title', 'Sala de Aula')

@section('main')
    <div class="px-4 py-6">
        <!-- Container principal: 1 coluna em mobile, 3 colunas em desktop -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

            <!-- Esquerda: Player e descrição (ocupa 2 colunas em desktop) -->
            <div class="flex flex-col gap-4 lg:col-span-2">
                <!-- Seção 2: Player responsivo 16:9 -->
                <div class="bg-black rounded-xl overflow-hidden shadow-lg">
                    <div class="relative" style="padding-top: 56.25%;">
                        <iframe
                            class="absolute top-0 left-0 w-full h-full"
                            src="https://www.youtube.com/embed/fwo5OST3Jh8"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <!-- Seção 3: Descrição da aula -->
                <div class="bg-[#29125e] rounded-xl p-4 shadow-lg">
                    <h3 class="text-lg font-semibold mb-2">Descrição da Aula</h3>
                    <p class="text-sm text-gray-300">
                        Nesta aula, iremos abordar os fundamentos da linguagem Python, incluindo variáveis, tipos de dados,
                        estruturas condicionais e ciclos.
                    </p>
                </div>
            </div>

            <!-- Direita: Lista de aulas do curso -->
            <section class="bg-[#29125e] rounded-xl p-4 shadow-lg overflow-y-auto">
                <h3 class="text-lg font-semibold mb-4">Aulas do Curso</h3>
                <ul class="space-y-2">
                    {{--@foreach($aulas as $aula)--}}
                    <li class="flex justify-between items-center bg-[#3a1a7a] p-2 rounded-md hover:bg-[#4b1fa1] transition">
                        <span>Introdução à Aula</span>
                        <button class="text-sm bg-green-600 px-3 py-1 rounded">Assistir</button>
                    </li>
                    {{--@endforeach--}}
                </ul>
            </section>

        </div>
    </div>
@endsection
