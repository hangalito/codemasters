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
                        onclick="mostrarInfo(this, 'course-details')"
                        class="px-2 py-1 border-blue-900 border-2 rounded-md hover:bg-blue-900 text-2xl"
                        data-nome="{{ $curso->nome }}"
                        data-desc="{{ $curso->desc }}"
                        data-preco="{{ number_format($curso->preco, 2, ',', '.') }}"
                        data-data="{{ \Carbon\Carbon::parse($curso->created_at)->format('d/m/Y') }}"
                        data-img="{{ asset('img/cursos/'.$curso->url_capa) }}">
                        Ver mais
                    </button>
                    <button
                        onclick="mostrarInfo(null, 'confirm-subscription')"
                        class="px-2 py-1 bg-green-600 rounded-md">
                        Começar
                    </button>
                </div>
            </div>
        @endforeach
    </div>

    <dialog id="course-details"
            class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2
               rounded-lg p-4 w-full max-w-xl bg-blue-900 shadow-xl
               backdrop:bg-black/50 backdrop:backdrop-blur-md">
        <div class="flex flex-col gap-3 text-gray-300">
            <img id="modal-img" src="" alt="Capa do curso" class="w-full h-[180px] object-cover rounded-md">
            <h2 id="modal-title" class="text-xl font-bold text-gray-300"></h2>
            <p id="modal-desc" class="text-sm text-gray-200"></p>
            <p class="text-sm"><strong>Preço:</strong> <span id="modal-preco"></span> KZ</p>
            <p class="text-sm"><strong>Data de criação:</strong> <span id="modal-data"></span></p>
            <button onclick="fecharInfo('course-details')"
                    class="bg-[#170448] hover:shadow-2xl hover:shadow-[#170448] text-white px-4 py-2 rounded-md self-end">
                Fechar
            </button>
        </div>
    </dialog>

    <dialog id="confirm-subscription"
            class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2
               rounded-lg p-4 w-full max-w-xl bg-blue-900 shadow-xl
               backdrop:bg-black/50 backdrop:backdrop-blur-md">
        <p class="text-2xl text-white font-semibold font-sans">
            Quer mesmo começar este curso?
        </p>
        <div class="flex flex-row flex-nowrap justify-end gap-3 mt-6 mb-1 px-2">
            <button onclick="fecharInfo('confirm-subscription')"
                    aria-selected="true"
                    class="bg-green-700 hover:bg-green-500 hover:shadow-2xl hover:shadow-[#170448] text-white px-4 py-2 rounded-md self-end">
                Sim
            </button>
            <button onclick="fecharInfo('confirm-subscription')"
                    class="bg-red-700 hover:bg-red-500 hover:shadow-2xl hover:shadow-[#170448] text-white px-4 py-2 rounded-md self-end">
                Não
            </button>
        </div>
    </dialog>
@endsection

<script>
    function mostrarInfo(btn, dialogId) {
        const dialog = document.getElementById(dialogId);

        if (btn !== null) {
            document.getElementById('modal-title').textContent = btn.dataset.nome;
            document.getElementById('modal-desc').textContent = btn.dataset.desc;
            document.getElementById('modal-preco').textContent = btn.dataset.preco;
            document.getElementById('modal-data').textContent = btn.dataset.data;
            document.getElementById('modal-img').src = btn.dataset.img;
        }

        dialog.showModal();
    }

    function fecharInfo(dialogId) {
        const dialog = document.getElementById(dialogId);
        dialog.close();
    }
</script>
