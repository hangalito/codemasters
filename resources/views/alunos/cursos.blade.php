@extends('alunos.dashboard.template')
@section('title', 'Cursos disponíveis')

@section('main')
    <h1 class="text-3xl text-white font-semibold mb-6">Cursos disponíveis</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        @foreach($cursos as $curso)
            <div
                class="bg-[#29125e] text-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('img/cursos/'.$curso->url_capa) }}" alt="Curso de {{ $curso->nome }}"
                     class="w-full h-[140px] object-cover">
                <div class="p-3">
                    <h3 class="text-lg font-semibold truncate">{{ $curso->nome }}</h3>
                    <p class="text-sm text-gray-300 mt-1 line-clamp-3">{{ $curso->desc }}</p>
                </div>
                <div class="px-3 py-2 w-full flex gap-3">
                    <button
                        onclick="mostrarInfo(this)"
                        class="px-2 py-1 border-blue-900 border-2 rounded-md hover:bg-blue-900"
                        data-nome="{{ $curso->nome }}"
                        data-desc="{{ $curso->desc }}"
                        data-preco="{{ number_format($curso->preco, 2, ',', '.') }}"
                        data-data="{{ \Carbon\Carbon::parse($curso->created_at)->format('d/m/Y') }}"
                        data-img="{{ asset('img/cursos/'.$curso->url_capa) }}"
                    >Ver mais
                    </button>
                    <button class="px-2 py-1 bg-green-600 rounded-md">Inscrever-se</button>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Modal -->
    <dialog id="course-details"
            class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2
               rounded-lg p-4 w-full max-w-xl bg-blue-900 shadow-xl
               backdrop:bg-black/50 backdrop:backdrop-blur-md">
        <div class="flex flex-col gap-3 text-gray-300">
            <img id="modal-img" src="" alt="Capa do curso" class="w-full h-[180px] object-cover rounded-md">
            <h2 id="modal-title" class="text-xl font-bold text-gray-300"></h2>
            <p id="modal-desc" class="text-sm text-gray-200"></p>
            <p class="text-sm"><strong>Preço:</strong> <span id="modal-preco"></span> KZ</p>
            <p class="text-sm"><strong>Data de Início:</strong> <span id="modal-data"></span></p>
            <button onclick="fecharInfo()" class="bg-[#170448] text-white px-4 py-2 rounded-md self-end">Fechar</button>
        </div>
    </dialog>
@endsection

<script>
    function mostrarInfo(btn) {
        const dialog = document.getElementById('course-details');
        document.getElementById('modal-title').textContent = btn.dataset.nome;
        document.getElementById('modal-desc').textContent = btn.dataset.desc;
        document.getElementById('modal-preco').textContent = btn.dataset.preco;
        document.getElementById('modal-data').textContent = btn.dataset.data;
        document.getElementById('modal-img').src = btn.dataset.img;

        if (!dialog.open) {
            dialog.showModal(); // este comando é o que realmente faz o modal aparecer
        }
    }

    function fecharInfo() {
        const dialog = document.getElementById('course-details');
        if (dialog.open) {
            dialog.close();
        }
    }
</script>
