<header class="bg-blue-950">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex p-6 flex-row flex-nowrap">
        <div class="flex shrink-0 items-center">
            <a href="{{ route('home') }}">
                <img class="h-9 w-auto"
                     src="{{asset('img/logo.png')}}"
                     alt="Code Masters">
            </a>
        </div>

        <nav class="ms-auto not-sm:hidden">
            <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                    <a href="{{route('home')}}"
                       class="rounded-md  px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-900 hover:text-white">
                        Início
                    </a>

                    <a href="{{route('about')}}"
                       class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-900 hover:text-white">
                        Sobre nós
                    </a>

                    <a href="{{route('courses')}}"
                       class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-900 hover:text-white">
                        Cursos
                    </a>

                    <a href="{{ route('support') }}"
                       class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-900 hover:text-white">
                        Suporte
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>
