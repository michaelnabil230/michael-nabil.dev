@title('Articles - ' . $article->title)

@extends('_layouts.app')

@section('main')
    @if ($article->cover_image)
        <img src="{{ $article->cover_image }}" alt="{{ $article->title }} cover image" class="mb-8">
    @endif

    <p class="text-gray-600 font-bold uppercase tracking-wide">
        {{ date('F j, Y', $article->date) }}
    </p>

    <h1 class="mt-3 text-3xl font-bold text-gray-900 leading-tight">
        {{ $article->title }}
    </h1>

    @if ($article->categories)
        @foreach ($article->categories as $i => $category)
            <a href="/articles/categories/{{ $category }}" title="View posts in {{ $category }}"
                class="inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-grey-darkest uppercase text-xs font-semibold rounded mr-4 px-3 pt-px">
                {{ $category }}
            </a>
        @endforeach
    @endif

    <div class="mt-4 markdown" x-init="$nextTick(function() { highlightCode($el); })">
        {!! $article->content !!}
    </div>
@endsection
