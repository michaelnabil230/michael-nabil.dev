<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $description ?? '' }}">
    <title>
        {{ isset($title) ? $title . ' | ' : '' }}
        {{ config('app.name') }}
    </title>
    <link rel="icon" href="/favicon.ico">
    <link href="/articles/feed.atom" type="application/atom+xml" rel="alternate"
        title="{{ config('app.name') }} Atom Feed">

    {{-- <meta property="og:type" content="{{ $page->extends === '_layouts.post' ? 'article' : 'website' }}" />
    <meta property="og:title" content="{{ $page->title ? $page->title . ' – ' : '' }}{{ $page->siteName }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:image" content="{{ $page->baseUrl }}/images/{{ $page->image ?: 'michael-nabil.jpeg' }}" />
    <meta property="og:description" content="{{ $page->description ?: $page->siteDescription }}" />

    @if ($page->image)
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@jessarchercodes" />
        <meta name="twitter:title"
            content="{{ $page->title ? $page->title . ' – ' : '' }}{{ $page->siteName }}" />
        <meta name="twitter:description" content="{{ $page->description ?: $page->siteDescription }}" />
        <meta name="twitter:image"
            content="{{ $page->baseUrl }}/images/{{ $page->image ?: 'michael-nabil.jpeg' }}" />
    @endif

    <link rel="home" href="{{ $page->baseUrl }}"> --}}

    @stack('meta')

    @vite('resources/css/app.css')
</head>

<body class="font-sans leading-normal text-gray-700 bg-gray-100 print:bg-white min-h-screen">
    @yield('body')

    @vite('resources/js/app.js')

    @stack('scripts')
</body>

</html>
