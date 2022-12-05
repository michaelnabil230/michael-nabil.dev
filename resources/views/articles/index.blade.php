<x-app-layout title="Articles">
    <div class="flex flex-col justify-between min-h-screen">
        <main class="mt-6 flex-auto w-full max-w-4xl mx-auto px-6">
            <h1 class="hidden">Articles</h1>

            @foreach ($articles as $article)
                @include('_components.article-preview-inline')

                @if ($article != $articles->last())
                    <hr class="border-b my-8">
                @endif
            @endforeach

            {{-- @if ($articles->count() > 1)
                <nav class="flex text-base my-8">
                    @if ($previous = $previous)
                        <a href="{{ rtrim($page->baseUrl, '/') }}/{{ ltrim($previous, '/') }}" title="Previous Page"
                            class="bg-grey-lighter hover:bg-grey-light rounded mr-3 px-5 py-3">
                            &LeftArrow;
                        </a>
                    @endif

                    @foreach ($articles as $pageNumber => $path)
                        <a href="{{ rtrim($page->baseUrl, '/') }}/{{ ltrim($path, '/') }}"
                            title="Go to Page {{ $pageNumber }}"
                            class="bg-grey-lighter hover:bg-grey-light text-blue-darker rounded mr-3 px-5 py-3 {{ $currentPage == $pageNumber ? 'text-blue-dark' : '' }}">
                            {{ $pageNumber }}
                        </a>
                    @endforeach

                    @if ($next = $next)
                        <a href="{{ rtrim($page->baseUrl, '/') }}/{{ ltrim($next, '/') }}" title="Next Page"
                            class="bg-grey-lighter hover:bg-grey-light rounded mr-3 px-5 py-3">
                            &RightArrow;
                        </a>
                    @endif
                </nav>
            @endif --}}
        </main>
    </div>
</x-app-layout>
