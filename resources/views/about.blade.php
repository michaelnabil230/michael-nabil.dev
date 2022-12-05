<x-app-layout title="About">
    <div class="flex-1 flex flex-col">
        <div class="flex-1 flex items-center justify-center">
            <div class="max-w-4xl px-4 py-12">
                <div class="mt-8 prose prose-zinc sm:prose-lg dark:prose-invert max-w-none">
                    <img src="{{ asset('images/michael-nabil.jpeg') }}"
                        class="sm:float-right mx-auto sm:ml-6 mb-10 w-56 sm:w-48 grayscale rounded-md shadow-lg sm:rotate-2 hover:grayscale-0 sm:hover:rotate-3 hover:scale-105 hover:shadow-2xl transition duration-150">
                    <h1>Hi there, <span class="whitespace-nowrap">I'm Michael Nabil.</span></h1>
                    <p>
                        I've been making computers do my bidding for over 6 years. I've done everything from
                        designing websites to
                        building the servers they run on. These days my passion is building web applications with
                        Laravel, Vue.js,
                        Tailwind CSS, and Flutter.
                    </p>
                    <p>Some interesting projects I've worked on include:</p>
                    <ul>
                        <li>A warehouse management system</li>
                        <li>E-commerce system with multi-tenant</li>
                        <li>An employee management system</li>
                    </ul>
                    <p>
                        I care deeply about open-source software, privacy, best practices, open standards, idiomatic
                        code, and great
                        user and developer experiences.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
