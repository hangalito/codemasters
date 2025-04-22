<header class="bg-blue-950">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex p-6 flex-row flex-nowrap">
        <div class="flex shrink-0 items-center">
            <a href="{{ route('home') }}">
                <img class="h-9 w-auto"
                     src="{{asset('img/logo.png')}}"
                     alt="Code Masters">
            </a>
        </div>

        <nav class="ms-auto">
            <div class="min-sm:hidden">
                <button class="hover:cursor-pointer" onclick="showSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                         fill="#e3e3e3">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
                    </svg>
                </button>
            </div>
            <div class="max-sm:hidden">
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
            </div>
        </nav>

        <nav id="sidebar" class="bg-blue-950 px-3">
            <div class="p-3">
                <button class="hover:cursor-pointer" onclick="closeSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                         fill="#e3e3e3">
                        <path
                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                    </svg>
                </button>
            </div>

            <a href="{{route('home')}}"
               class="w-full rounded-md  px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-900 hover:text-white">
                Início
            </a>

            <a href="{{route('about')}}"
               class="w-full rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-900 hover:text-white">
                Sobre nós
            </a>

            <a href="{{route('courses')}}"
               class="w-full rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-900 hover:text-white">
                Cursos
            </a>

            <a href="{{ route('support') }}"
               class="w-full rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-900 hover:text-white">
                Suporte
            </a>
        </nav>
    </div>
</header>
