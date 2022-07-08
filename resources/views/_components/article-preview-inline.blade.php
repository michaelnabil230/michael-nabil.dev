<article>
    <p class="text-gray-600 text-sm font-bold uppercase tracking-wide">
        {{ $article->created_at->format('F j, Y') }}
    </p>

    <h2 class="mt-2 text-2xl font-bold text-gray-900">
        <a href="{{ route('articles.show', $article->slug) }}" title="Read more - {{ $article->title }}"
            class="hover:text-blue-700 focus:text-blue-700">
            {{ $article->title }}
        </a>
    </h2>

    <p class="mt-2 max-w-2xl text-lg">
        {!! $article->mini_content !!}
    </p>

    <p class="mt-4">
        <a href="{{ route('articles.show', $article->slug) }}" title="Read more - {{ $article->title }}"
            class="text-base uppercase font-semibold tracking-wide hover:text-blue-700 focus:text-blue-700">
            Read
        </a>
    </p>
</article>
