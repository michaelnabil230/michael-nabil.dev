<header class="h-20 flex items-center bg-white/80 dark:bg-gray-900/60 backdrop-blur-md sticky top-0 z-10 print:hidden">
    <div class="w-full max-w-4xl px-4 mx-auto flex items-center">
        <nav class="hidden sm:block">
            <ul class="flex justify-center gap-6">
                <li>
                    <a href="{{ route('welcome') }}"
                        class="font-medium py-1 hover:text-gray-900 dark:hover:text-gray-100 {{ Route::is('welcome') ? 'text-gray-900 dark:text-gray-100 underline underline-offset-4 decoration-gray-400 dark:decoration-gray-600' : 'text-gray-500 border-transparent' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="font-medium py-1 hover:text-gray-900 dark:hover:text-gray-100 {{ Route::is('about') ? 'text-gray-900 dark:text-gray-100 underline underline-offset-4 decoration-gray-400 dark:decoration-gray-600' : 'text-gray-500 border-transparent' }}">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ route('articles.index') }}"
                        class="font-medium py-1 hover:text-gray-900 dark:hover:text-gray-100 {{ Route::is('articles.index') ? 'text-gray-900 dark:text-gray-100 underline underline-offset-4 decoration-gray-400 dark:decoration-gray-600' : 'text-gray-500 border-transparent' }}">
                        Articles
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                        class="font-medium py-1 hover:text-gray-900 dark:hover:text-gray-100 {{ Route::is('contact') ? 'text-gray-900 dark:text-gray-100 underline underline-offset-4 decoration-gray-400 dark:decoration-gray-600' : 'text-gray-500 border-transparent' }}">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('cv') }}"
                        class="font-medium py-1 hover:text-gray-900 dark:hover:text-gray-100 {{ Route::is('cv') ? 'text-gray-900 dark:text-gray-100 underline underline-offset-4 decoration-gray-400 dark:decoration-gray-600' : 'text-gray-500 border-transparent' }}">
                        Cv
                    </a>
                </li>
            </ul>
        </nav>
        <div class="flex-1 flex gap-4 items-center justify-end">
            <div class="relative" x-data="{
                menu: false,
                theme: localStorage.theme,
                darkMode() {
                    this.theme = 'dark'
                    localStorage.theme = 'dark'
                    setDarkClass()
                },
                lightMode() {
                    this.theme = 'light'
                    localStorage.theme = 'light'
                    setDarkClass()
                },
                systemMode() {
                    this.theme = undefined
                    localStorage.removeItem('theme')
                    setDarkClass()
                },
            }" @click.outside="menu = false">
                <button x-cloak
                    class="p-1 border dark:border-gray-700 rounded-full hover:bg-gray-50 dark:hover:bg-gray-800 focus:hover-gray-50 dark:focus:hover-gray-800 hover:border-gray-300 dark:hover:border-gray-600 dark:focus:border-gray-600"
                    :class="theme ? 'text-gray-700 dark:text-gray-300' :
                        'text-gray-400 dark:text-gray-600 hover:text-gray-500 focus:text-gray-500 dark:hover:text-gray-500 dark:focus:text-gray-500'"
                    @click="menu = ! menu">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="block dark:hidden w-6 h-6">
                        <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" class="stroke-slate-400 dark:stroke-slate-500">
                        </path>
                        <path
                            d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836"
                            class="stroke-slate-400 dark:stroke-slate-500"></path>
                    </svg>
                    <svg viewBox="0 0 24 24" fill="none" class="hidden dark:block w-6 h-6">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z"
                            class="fill-transparent"></path>
                        <path
                            d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z"
                            class="fill-slate-400 dark:fill-slate-500"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z"
                            class="fill-slate-400 dark:fill-slate-500"></path>
                    </svg>
                </button>
                <div x-show="menu"
                    class="absolute origin-top-right right-0 py-2 bg-white dark:bg-gray-800 rounded-md shadow-xl flex flex-col"
                    style="display: none;" @click="menu = false">
                    <button class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700"
                        :class="theme === 'light' ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
                        @click="lightMode()">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="w-5 h-5">
                            <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                class="stroke-slate-400 dark:stroke-slate-500"></path>
                            <path
                                d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836"
                                class="stroke-slate-400 dark:stroke-slate-500"></path>
                        </svg>
                        <span class="ml-2 text-sm">Light</span>
                    </button>
                    <button class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700"
                        :class="theme === 'dark' ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
                        @click="darkMode()">
                        <svg viewBox="0 0 24 24" fill="none" class="w-5 h-5">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z"
                                class="fill-transparent"></path>
                            <path
                                d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z"
                                class="fill-slate-400 dark:fill-slate-500"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z"
                                class="fill-slate-400 dark:fill-slate-500"></path>
                        </svg>
                        <span class="ml-2 text-sm">Dark</span>
                    </button>
                    <button class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700"
                        :class="theme === undefined ? 'text-gray-900 dark:text-gray-100' :
                            'text-gray-500 dark:text-gray-400'"
                        @click="systemMode()">
                        <svg viewBox="0 0 24 24" fill="none" class="w-5 h-5">
                            <path d="M4 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6Z"
                                stroke-width="2" stroke-linejoin="round" class="stroke-slate-400 fill-slate-400/20"></path>
                            <path d="M14 15c0 3 2 5 2 5H8s2-2 2-5" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="stroke-slate-400"></path>
                        </svg>
                        <span class="ml-2 text-sm">System</span>
                    </button>
                </div>
            </div>
            <button class="sm:hidden" @click="menu = ! menu">
                <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>
</header>
<div x-show="menu" style="display: none;" class="fixed inset-0 bg-white dark:bg-gray-900 z-20 print:hidden">
    <div class="h-20 px-4 flex items-center justify-between">
        <a class="block h-14 w-14 relative rounded-full border-2 border-white dark:border-gray-700 group shadow"
            href="{{ route('welcome') }}">
            <div class="bg-gradient-to-r from-blue-400 to-blue-600 rounded-full overflow-hidden shadow-lg">
                <img src="{{ asset('images/michael-nabil.jpeg') }}" alt="Michael Nabil Rezk Senada"
                    class="flex-shrink-0 rounded-full p-0.5" />
            </div>
        </a>
        <button @click="menu = ! menu">
            <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <nav class="px-4 text-right">
        <ul class="flex flex-col gap-6">
            <li>
                <a href="{{ route('welcome') }}"
                    class="font-medium text-xl py-1 hover:text-gray-900 dark:hover:text-gray-100 {{ Route::is('welcome') ? 'text-gray-900 dark:text-gray-100 underline underline-offset-4 decoration-gray-400 dark:decoration-gray-600' : 'text-gray-500 border-transparent' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}"
                    class="font-medium text-xl py-1 hover:text-gray-900 dark:hover:text-gray-100 {{ Route::is('about') ? 'text-gray-900 dark:text-gray-100 underline underline-offset-4 decoration-gray-400 dark:decoration-gray-600' : 'text-gray-500 border-transparent' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('articles.index') }}"
                    class="font-medium text-xl py-1 hover:text-gray-900 dark:hover:text-gray-100 {{ Route::is('articles.index') ? 'text-gray-900 dark:text-gray-100 underline underline-offset-4 decoration-gray-400 dark:decoration-gray-600' : 'text-gray-500 border-transparent' }}">
                    Articles
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}"
                    class="font-medium text-xl py-1 hover:text-gray-900 dark:hover:text-gray-100 {{ Route::is('contact') ? 'text-gray-900 dark:text-gray-100 underline underline-offset-4 decoration-gray-400 dark:decoration-gray-600' : 'text-gray-500 border-transparent' }}">
                    Contact
                </a>
            </li>
            <li>
                <a href="{{ route('cv') }}"
                    class="font-medium text-xl py-1 hover:text-gray-900 dark:hover:text-gray-100 {{ Route::is('cv') ? 'text-gray-900 dark:text-gray-100 underline underline-offset-4 decoration-gray-400 dark:decoration-gray-600' : 'text-gray-500 border-transparent' }}">
                    Cv
                </a>
            </li>
        </ul>
    </nav>
</div>
