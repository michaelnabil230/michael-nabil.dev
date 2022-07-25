<header class="mt-3 py-6" role="banner" x-init="{}" x-data="{ navMenuIsOpen: false }">
    <div class="mx-auto w-full max-w-4xl md:px-6 md:flex md:items-center">
        <div class="flex-1 px-6 flex items-center justify-between md:px-0">
            <a href="{{ route('welcome') }}">
                <h1 class="text-gray-800 text-2xl font-bold uppercase whitespace-no-wrap">
                    Michael Nabil Rezk Senada
                </h1>
            </a>

            <div class="flex items-center">
                <button aria-hidden="true"
                    class="flex justify-center items-center h-10 w-10 md:hidden focus:outline-none"
                    @click="navMenuIsOpen = !navMenuIsOpen">
                    <svg role="img" aria-label="Open Menu" x-show="!navMenuIsOpen"
                        xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-900 h-12 w-5"
                        viewBox="0 0 32 32">
                        <path
                            d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z" />
                    </svg>
                    <svg role="img" aria-label="Close Menu" x-show="navMenuIsOpen"
                        xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-900 h-5 w-5"
                        viewBox="0 0 36 30">
                        <polygon
                            points="32.8,4.4 28.6,0.2 18,10.8 7.4,0.2 3.2,4.4 13.8,15 3.2,25.6 7.4,29.8 18,19.2 28.6,29.8 32.8,25.6 22.2,15 " />
                    </svg>
                </button>
            </div>
        </div>

        <div class="md:flex md:justify-end md:items-center">
            <nav x-show="navMenuIsOpen" x-transition:enter.duration.500ms x-transition:leave.duration.400ms
                class="mt-6 py-3 px-3 text-lg font-semibold bg-gray-200 md:mt-0 md:p-0 md:flex md:items-center md:justify-end md:bg-transparent">
                <a href="{{ route('articles.index') }}"
                    class="
                        block py-1 px-3 text-gray-900 rounded
                        hover:bg-gray-300 hover:text-blue-700
                        md:hover:bg-gray-200
                    ">
                    <span class="{{ Route::is('articles.index') ? '' : '' }}">
                        Articles
                    </span>
                </a>

                <a href="{{ route('contact') }}"
                    class="
                        block py-1 px-3 text-gray-900 rounded
                        hover:bg-gray-300 hover:text-blue-700
                        md:hover:bg-gray-200
                    ">
                    <span class="{{ Route::is('contact') ? '' : '' }}">
                        Contact
                    </span>
                </a>
                <a href="{{ route('cv') }}"
                    class="
                        block py-1 px-3 text-gray-900 rounded
                        hover:bg-gray-300 hover:text-blue-700
                        md:hover:bg-gray-200
                    ">
                    <span class="{{ Route::is('cv') ? '' : '' }}">
                        Cv
                    </span>
                </a>
            </nav>
        </div>
    </div>
</header>
