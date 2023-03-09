<x-app-layout title="CV">

    @push('meta')
        <meta name="robots" content="noindex">
    @endpush

    <div class="max-w-4xl mx-auto p-6 print:p-0 print:max-w-none print:bg-white">
        <header role="banner">
            <img src="{{ asset('images/michael-nabil.jpeg') }}" alt="Photo of Michael Nabil Rezk Senada"
                class="sm:hidden h-20 w-20 rounded-full bg-contain">

            <div class="mt-4 sm:mt-0 flex justify-between">
                <div>
                    <a href="{{ route('welcome') }}">
                        <h1
                            class="text-gray-800 dark:text-white dark:print:text-gray-800 text-2xl font-bold uppercase whitespace-no-wrap">
                            Michael Nabil Rezk Senada
                        </h1>
                    </a>

                    <p class="mt-2 text-lg text-blue-800">
                        Senior Web Application and mobile Developer
                    </p>

                    <p class="mt-4 dark:text-white dark:print:text-black">
                        A proficient and passionate full-stack developer, open-source contributor, and contributor in
                        the Laravel team,
                        troubleshooter, and mobile developer
                        &ndash; with over 6 years of professional experience. Currently specialized in Laravel, Vue.js,
                        Tailwind CSS, and Flutter.
                    </p>
                </div>

                <img src="{{ asset('images/michael-nabil.jpeg') }}" alt="Photo of Michael Nabil Rezk Senada"
                    class="hidden sm:block ml-4 flex-shrink-0 h-24 w-24 rounded-full bg-contain">
            </div>
        </header>

        <hr class="mt-6 slate-200 dark:border-slate-800" />

        <div class="mt-6">
            <ul class="-my-1 sm:flex sm:flex-wrap">
                <li class="my-1 sm:w-1/2 md:w-1/3">
                    <p class="inline-flex items-center">
                        <svg class="h-5 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 48 48">
                            <path
                                d="M24 0C15.168.01 8.01 7.168 8 16c0 7.02 10 24.05 14.296 31.048A2 2 0 0024 48a1.98 1.98 0 001.704-.954C30 40.052 40 23.028 40 16 39.99 7.168 32.832.01 24 0zm0 23a7 7 0 110-14 7 7 0 010 14z" />
                        </svg>
                        <span class="ml-2 dark:text-white dark:print:text-black">
                            Egypt, Cairo
                            <small class="font-normal">(GMT +2)</small>
                        </span>
                    </p>
                </li>

                <li class="my-1 sm:w-1/2 md:w-1/3">
                    <a class="group inline-flex items-center"
                        href="https://wa.me/+201200954866?text=Hi%20Michael%20%0AI%20want%20to%20deal%20with%20you"
                        target="_blank">
                        <svg class="h-5 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                        </svg>
                        <span
                            class="ml-2 dark:text-white dark:print:text-black border-b border-dotted border-transparent group-hover:border-blue-500">
                            +20 120 0954 866
                        </span>
                    </a>
                </li>

                <li class="my-1 sm:w-1/2 md:w-1/3">
                    <a class="group inline-flex items-center" href="https://michael-nabil.dev" target="_blank">
                        <svg class="h-5 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 48 48">
                            <path
                                d="M38 47.5a2 2 0 000-4H25.5a.5.5 0 01-.5-.5v-3a.5.5 0 01.5-.5H42a6 6 0 006-6V5.678A5.094 5.094 0 0043 .5H5a5.094 5.094 0 00-5 5.178V33.5a6 6 0 006 6h14.5a.5.5 0 01.5.5v3a.5.5 0 01-.5.5H10a2 2 0 000 4h28zM4 5.678A1.102 1.102 0 015 4.5h38a1.102 1.102 0 011 1.178V29.5a1 1 0 01-1 1H5a1 1 0 01-1-1V5.678zM16 12a1.5 1.5 0 00-1.5 1.5v2.7c.002.496-.032.99-.1 1.48a.25.25 0 01-.23.214.253.253 0 01-.258-.18l-.464-1.626a1.499 1.499 0 00-2.884 0l-.464 1.624a.25.25 0 01-.5-.032c-.068-.49-.102-.984-.1-1.48v-2.7a1.5 1.5 0 00-3 0v2.7c0 1.712.328 3.41.964 5L8.6 24.056c.228.604.824.986 1.468.942a1.498 1.498 0 001.366-1.086l.326-1.112a.25.25 0 01.48 0l.318 1.112a1.498 1.498 0 001.366 1.086H14a1.496 1.496 0 001.4-.944l1.136-2.854c.636-1.59.964-3.288.964-5v-2.7A1.5 1.5 0 0016 12zm12 0a1.5 1.5 0 00-1.5 1.5v2.7c0 .498-.036.996-.106 1.49a.25.25 0 01-.23.214.253.253 0 01-.258-.18l-.464-1.626a1.499 1.499 0 00-2.884 0l-.464 1.624a.25.25 0 01-.494-.042c-.068-.49-.102-.984-.1-1.48v-2.7a1.5 1.5 0 00-3 0v2.7c0 1.712.328 3.41.964 5l1.144 2.852c.226.604.824.988 1.468.942a1.498 1.498 0 001.366-1.086l.318-1.112a.25.25 0 01.48 0l.318 1.112a1.498 1.498 0 001.366 1.086H26a1.496 1.496 0 001.4-.944l1.144-2.852A13.45 13.45 0 0029.5 16.2v-2.7A1.5 1.5 0 0028 12zm12 0a1.5 1.5 0 00-1.5 1.5v2.7c0 .498-.036.996-.106 1.49a.25.25 0 01-.23.214.253.253 0 01-.258-.18l-.464-1.626a1.499 1.499 0 00-2.884 0l-.464 1.624a.25.25 0 01-.494-.042c-.068-.49-.102-.984-.1-1.48v-2.7a1.5 1.5 0 00-3 0v2.7c-.002 1.718.326 3.42.964 5.014l1.144 2.852c.226.604.824.988 1.468.942a1.498 1.498 0 001.366-1.086l.318-1.112a.25.25 0 01.48 0l.318 1.112a1.498 1.498 0 001.366 1.086H38a1.496 1.496 0 001.4-.944l1.144-2.852c.636-1.594.96-3.296.956-5.012v-2.7A1.5 1.5 0 0040 12z" />
                        </svg>
                        <span
                            class="ml-2 dark:text-white dark:print:text-black border-b border-dotted border-transparent group-hover:border-blue-500">
                            michael-nabil.dev
                        </span>
                    </a>
                </li>

                <li class="my-1 sm:w-1/2 md:w-1/3">
                    <a class="group inline-flex items-center" href="https://github.com/michaelnabil230" target="_blank">
                        <svg class="h-5 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 48 48">
                            <path
                                d="M24 .56C10.746.556-.004 11.298-.008 24.552A24 24 0 0016.56 47.38h.58a2 2 0 002.12-2.12v-.42-2.18a1.005 1.005 0 00-.4-.66 1.001 1.001 0 00-.84-.2c-5.36 1.16-6.5-2.2-6.58-2.42A9.287 9.287 0 008 35a2.31 2.31 0 00-.3-.22c.232-.126.498-.174.76-.14a2.94 2.94 0 012.3 1.76 6 6 0 008 2.32c.3-.13.516-.4.58-.72a3.994 3.994 0 011.12-2.46 1.002 1.002 0 00-.54-1.74c-4.74-.54-9.58-2.2-9.58-10.38a7.999 7.999 0 012.1-5.56.996.996 0 00.18-1.06 7.044 7.044 0 01.02-4.8 11.073 11.073 0 015.04 2.3.98.98 0 00.84.14A21.214 21.214 0 0124 13.7a20.94 20.94 0 015.5.74c.28.078.582.026.82-.14a11.176 11.176 0 015.04-2.3 7.146 7.146 0 010 4.76.996.996 0 00.18 1.06 8 8 0 012.1 5.5c0 8.18-4.86 9.82-9.62 10.36a1.001 1.001 0 00-.54 1.76 4.405 4.405 0 011.22 3.48v6.36c-.02.634.244 1.242.72 1.66a2.398 2.398 0 002.12.38c12.57-4.206 19.352-17.804 15.146-30.374A24 24 0 0024 .56z" />
                        </svg>
                        <span
                            class="ml-2 dark:text-white dark:print:text-black border-b border-dotted border-transparent group-hover:border-blue-500">
                            github.com/michaelnabil230
                        </span>
                    </a>
                </li>

                <li class="my-1 sm:w-1/2 md:w-1/3">
                    <a class="group inline-flex items-center" href="mailto:michael.nabil230@gmail.com" target="_blank">
                        <svg class="h-5 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z" />
                        </svg>
                        <span
                            class="ml-2 dark:text-white dark:print:text-black border-b border-dotted border-transparent group-hover:border-blue-500">
                            michael.nabil230@gmail.com
                        </span>
                    </a>
                </li>

                <li class="my-1 sm:w-1/2 md:w-1/3">
                    <a class="group inline-flex items-center" href="https://www.linkedin.com/in/michael-nabil-230"
                        target="_blank">
                        <svg class="h-5 fill-current text-blue-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 48 48">
                            <path
                                d="M5 17h8a1 1 0 011 1v26a1 1 0 01-1 1H5a1 1 0 01-1-1V18a1 1 0 011-1zM8.96 3c2.74 0 4.96 2.238 4.96 5s-2.22 5-4.96 5S4 10.762 4 8s2.22-5 4.96-5zM37 45h6a1 1 0 001-1V27.2C44 19.66 39.74 16 33.78 16a8.424 8.424 0 00-6.34 2.54A.82.82 0 0126 18a1 1 0 00-1-1h-6a1 1 0 00-1 1v26a1 1 0 001 1h6a1 1 0 001-1V29c0-2.762 2.238-5 5-5s5 2.238 5 5v15a1 1 0 001 1z" />
                        </svg>
                        <span
                            class="ml-2 dark:text-white dark:print:text-black border-b border-dotted border-transparent group-hover:border-blue-500">
                            linkedin.com/in/michael-nabil-230
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <hr class="mt-6 slate-200 dark:border-slate-800" />

        <h2 class="mt-6 text-xl uppercase tracking-wide dark:text-white dark:print:text-black">Expertise</h2>

        <div class="mt-6">
            {{-- (https://worldvectorlogo.com) for icons --}}
            <ul class="-m-1 flex flex-wrap text-sm sm:text-base">
                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/laravel.svg') }}" alt="laravel icon">
                    <span class="ml-1">Laravel</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/php.svg') }}" alt="php icon">
                    <span class="ml-1">PHP</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/flutter.svg') }}" alt="flutter icon">
                    <span class="ml-1">Flutter</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/dart.svg') }}" alt="dart icon">
                    <span class="ml-1">Dart</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/vuejs.svg') }}" alt="vuejs icon">
                    <span class="ml-1">Vue.js</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/nuxtjs.svg') }}" alt="nuxtjs icon">
                    <span class="ml-1">Nuxt.js</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/alpinejs.svg') }}" alt="alpinejs icon">
                    <span class="ml-1">Alpine Js</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/tailwindcss.svg') }}"
                        alt="tailwindcss icon">
                    <span class="ml-1">Tailwind CSS</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/bootstrap.svg') }}" alt="bootstrap icon">
                    <span class="ml-1">Bootstrap</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/javascript.svg') }}" alt="javascript icon">
                    <span class="ml-1">JavaScript</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/css.svg') }}" alt="css icon">
                    <span class="ml-1">CSS</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/html.svg') }}" alt="html icon">
                    <span class="ml-1">HTML</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/mysql.svg') }}" alt="mysql icon">
                    <span class="ml-1">MySQL</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/mariaDB.svg') }}" alt="mariaDB icon">
                    <span class="ml-1">MariaDB</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/fireBase.svg') }}" alt="fireBase icon">
                    <span class="ml-1">FireBase</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/git.svg') }}" alt="git icon">
                    <span class="ml-1">Git</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/docker.svg') }}" alt="docker icon">
                    <span class="ml-1">Docker</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/kubernets.svg') }}" alt="kubernets icon">
                    <span class="ml-1">Kubernets</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">
                    <img class="inline w-4 h-4" src="{{ asset('images/cv/graphql.svg') }}" alt="Qraphql icon">
                    <span class="ml-1">Qraphql</span>
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">APIs</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">Open-source</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">OOP</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">Solid principles
                </li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">MVC</li>

                <li class="m-1 px-3 py-1 inline-flex items-center bg-blue-100 text-blue-800 rounded">Unit testing</li>

            </ul>
        </div>

        <hr class="mt-6 slate-200 dark:border-slate-800" />

        <h2 class="mt-6 text-xl uppercase tracking-wide dark:text-white dark:print:text-black">Professional Experience
        </h2>

        <div class="mt-6 sm:flex">
            <div
                class="
                    inline-block p-2 bg-blue-100 rounded-lg text-blue-700 font-bold text-center leading-none tracking-wide
                    sm:h-24 sm:w-20 sm:p-0 sm:flex-shrink-0 sm:flex sm:items-center sm:justify-center sm:text-lg
                ">
                <div>
                    <span class="inline sm:block">2023</span>
                    <span class="hidden sm:inline">|</span>
                    <span class="sm:hidden">&mdash;</span>
                    <span class="inline sm:block">2021</span>
                </div>
            </div>

            <div class="mt-2 sm:mt-0 sm:ml-6">
                <p class="text-lg font-bold dark:text-white dark:print:text-black">CEO And Team Leader Developer</p>
                <p>
                    <a class="text-blue-700 font-semibold" href="https://shaghf.sa" target="_blank">
                        Shaghf.sa
                    </a>
                </p>
                <ul class="mt-3 pl-4 list-disc dark:text-white dark:print:text-black">
                    <li>Product development and ideation.</li>
                    <li>
                        Set up of CI/CD pipelines with linting, static analysis, and test stages, with deployment to
                        staging
                        and production instances on Contabo.
                    </li>
                    <li>Software integrations.</li>
                    <li>Development of a Nuxt.js with Laravel API.</li>
                </ul>
            </div>
        </div>

        <div class="mt-6 sm:flex">
            <div
                class="
                    inline-block p-2 bg-blue-100 rounded-lg text-blue-700 font-bold text-center leading-none tracking-wide
                    sm:h-24 sm:w-20 sm:p-0 sm:flex-shrink-0 sm:flex sm:items-center sm:justify-center sm:text-lg
                ">
                <div>
                    <span class="inline sm:block">2021</span>
                    <span class="hidden sm:inline">|</span>
                    <span class="sm:hidden">&mdash;</span>
                    <span class="inline sm:block">2019</span>
                </div>
            </div>

            <div class="mt-2 sm:mt-0 sm:ml-6">
                <p class="text-lg font-bold dark:text-white dark:print:text-black">Senior Web Developer</p>
                <p>
                    <a class="text-blue-700 font-semibold" href="https://m6wer.com" target="_blank">
                        M6wer.com
                    </a>
                </p>
                <ul class="mt-3 pl-4 list-disc dark:text-white dark:print:text-black">
                    <li>Back-end web development.</li>
                    <li>Software integrations.</li>
                </ul>
            </div>
        </div>

        <div class="mt-6 sm:flex">
            <div
                class="
                    inline-block p-2 bg-blue-100 rounded-lg text-blue-700 font-bold text-center leading-none tracking-wide
                    sm:h-24 sm:w-20 sm:p-0 sm:flex-shrink-0 sm:flex sm:items-center sm:justify-center sm:text-lg
                ">
                <div>
                    <span class="inline sm:block">2019</span>
                    <span class="hidden sm:inline">|</span>
                    <span class="sm:hidden">&mdash;</span>
                    <span class="inline sm:block">2018</span>
                </div>
            </div>

            <div class="mt-2 sm:mt-0 sm:ml-6">
                <p class="text-lg font-bold dark:text-white dark:print:text-black">Web Developer</p>
                <p class="text-blue-700 font-semibold">
                    Freelancer
                </p>
                <ul class="mt-3 pl-4 list-disc dark:text-white dark:print:text-black">
                    <li>Back-end web development.</li>
                    <li>
                        Web app development, including the creation of POS system with touch screen, receipt printer,
                        and
                        cash drawer.
                    </li>
                    <li>Software integrations.</li>
                    <li>Contact a client.</li>
                </ul>
            </div>
        </div>

        <hr class="mt-6 slate-200 dark:border-slate-800" />

        {{-- <h2 class="mt-6 text-xl uppercase tracking-wide">Spacial work</h2>

        <div class="mt-6">
            <div class="ml-4">
                <div class="font-bold">An application for the Saudi Communications Commission</div>
                <div class="text-sm">2022</div>
                <p class="mt-2">
                    The application for employee attendance and departure. 
                    for determining whether the location is inside the office or not.
                </p>
            </div>
        </div>

        <hr class="mt-6 slate-200 dark:border-slate-800" /> --}}

        <h2 class="mt-6 text-xl uppercase tracking-wide dark:text-white dark:print:text-black">Certificates</h2>

        <div class="mt-6">
            <div class="flex">
                <svg class="mt-1 flex-shrink-0 h-8 w-8 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 48 48">
                    <path
                        d="M44 11h-1.368c.33-2.316.518-4.648.568-6.986A3.913 3.913 0 0039.388.002C39.356 0 39.324 0 39.292 0H8.73a3.92 3.92 0 00-3.912 4.01c.05 2.342.238 4.68.564 7H4c-2.21 0-4 1.79-4 4V20a10.037 10.037 0 006.532 9.382 2.002 2.002 0 001.386-3.754A6.026 6.026 0 014 20v-5h2.132c2.754 11.058 10.778 15.348 17.6 15.348 11.218 0 16.444-8.64 18.142-15.348H44v5a6.026 6.026 0 01-3.918 5.628 2.002 2.002 0 001.386 3.754A10.04 10.04 0 0048 20v-5c0-2.21-1.79-4-4-4zM19.366 21.418a1.044 1.044 0 01-1.43-.376 1.049 1.049 0 01-.062-.932L19.66 16a.496.496 0 00-.108-.556l-3.226-3.168a.98.98 0 01.688-1.712h3.68a.501.501 0 00.454-.288l1.924-4.142a1.062 1.062 0 011.884 0l1.922 4.14c.08.176.258.29.452.29h3.682a.98.98 0 01.69 1.712l-3.228 3.174a.505.505 0 00-.108.55l1.788 4.104a1.048 1.048 0 01-1.492 1.308l-4.4-2.476a.498.498 0 00-.49 0l-4.406 2.482zm4.36 11.93c-1.046 0-2.088-.078-3.122-.234a.498.498 0 00-.572.508c.18 6.724-4.648 6.446-5.016 6.484A3.958 3.958 0 0015.4 48h17.218a3.938 3.938 0 003.912-3.964V44A3.897 3.897 0 0033 40.106c-3.034-.298-5.328-1.6-5.142-6.506a.505.505 0 00-.166-.4.495.495 0 00-.4-.124c-1.18.176-2.372.268-3.566.272z" />
                </svg>

                <div class="ml-4 dark:text-white dark:print:text-black">
                    <div class="font-bold">IQ Test</div>
                    <div class="text-sm">2022</div>
                </div>
            </div>

            <div class="mt-6 flex">
                <svg class="mt-1 flex-shrink-0 h-8 w-8 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 48 48">
                    <path
                        d="M13.05 20.27l6.226-.358 2.384 6.046a2.52 2.52 0 002.5 1.6 2.56 2.56 0 002.362-1.894l2-7.154 7.152-2a2.557 2.557 0 001.896-2.36 2.514 2.514 0 00-1.6-2.502l-6.058-2.374.36-6.276A2.52 2.52 0 0028.75.624a2.46 2.46 0 00-2.73.576l-3.772 3.77-6.612-2.628-.06-.024a2.588 2.588 0 00-3.236 3.318l2.626 6.616-3.766 3.77a2.462 2.462 0 00-.58 2.722 2.544 2.544 0 002.4 1.526h.03zm1.518 19.298c-1.656 0-3 1.344-3 3v4a1 1 0 001 1h24a1 1 0 001-1v-4c0-1.656-1.344-3-3-3h-20zm18-3a1 1 0 001-1v-3a3.694 3.694 0 00-2.696-3.454l-6.06-1.516a.953.953 0 00-.486 0l-6.058 1.514a3.698 3.698 0 00-2.7 3.456v3a1 1 0 001 1h16z" />
                </svg>

                <div class="ml-4 dark:text-white dark:print:text-black">
                    <div class="font-bold">El Madina High Institute for management and technology</div>
                    <div class="text-sm">2022 &mdash; 2018</div>
                    <p class="mt-2">
                        Information systems section with grade good.
                    </p>
                </div>
            </div>

            <div class="mt-6 flex">
                <svg class="mt-1 flex-shrink-0 h-8 w-8 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 48 48">
                    <path
                        d="M13.05 20.27l6.226-.358 2.384 6.046a2.52 2.52 0 002.5 1.6 2.56 2.56 0 002.362-1.894l2-7.154 7.152-2a2.557 2.557 0 001.896-2.36 2.514 2.514 0 00-1.6-2.502l-6.058-2.374.36-6.276A2.52 2.52 0 0028.75.624a2.46 2.46 0 00-2.73.576l-3.772 3.77-6.612-2.628-.06-.024a2.588 2.588 0 00-3.236 3.318l2.626 6.616-3.766 3.77a2.462 2.462 0 00-.58 2.722 2.544 2.544 0 002.4 1.526h.03zm1.518 19.298c-1.656 0-3 1.344-3 3v4a1 1 0 001 1h24a1 1 0 001-1v-4c0-1.656-1.344-3-3-3h-20zm18-3a1 1 0 001-1v-3a3.694 3.694 0 00-2.696-3.454l-6.06-1.516a.953.953 0 00-.486 0l-6.058 1.514a3.698 3.698 0 00-2.7 3.456v3a1 1 0 001 1h16z" />
                </svg>

                <div class="ml-4 dark:text-white dark:print:text-black">
                    <div class="font-bold">Don Bosco</div>
                    <div class="text-sm">2018 &mdash; 2017</div>
                    <p class="mt-2">
                        Diploma of industrial technician for three years,
                        Department of Electricity from the institute of salzian.
                    </p>
                </div>
            </div>
        </div>
        <hr class="mt-6 slate-200 dark:border-slate-800" />
        <p class="mt-6 text-xs text-gray-500">
            Updated at {{ date('d/m/Y') }}
        </p>
    </div>
</x-app-layout>
