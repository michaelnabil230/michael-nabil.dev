<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $attributes['description'] ?? 'Full-stack Laravel developer' }}">
    <title>
        {{ isset($attributes['title']) ? $attributes['title'] . ' | ' : '' }}
        {{ config('app.name', 'Laravel') }}
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

    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <script>
        const setDarkClass = () => {
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                    '(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark')
            } else {
                document.documentElement.classList.remove('dark')
            }
        }
        setDarkClass()
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setDarkClass)
    </script>
</head>

<body
    class="font-sans min-h-screen flex flex-col bg-gray-100 print:bg-white dark:bg-gray-900 selection:bg-indigo-500 selection:text-white"
    x-data="{ menu: false }" x-init="$watch('menu', value => value ?
        document.body.classList.add('overflow-hidden') :
        document.body.classList.remove('overflow-hidden')
    )">

    @include('_components.header')

    {{ $slot }}

    @include('_components.footer')
</body>

</html>
