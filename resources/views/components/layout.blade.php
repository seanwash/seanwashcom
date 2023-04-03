@props(['seo'])

@php
    $navLinks = [
        'Home' => route('home'),
        'Uses' => route('uses'),
    ];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <x-favicon />

        <title>
            @if($seo?->title) {{ $seo->title }} -@endif {{ config('app.name') }}
        </title>

        <meta name="description" content="{{ $seo?->description }}"/>
        <meta property="og:description" content="{{ $seo?->description }}"/>
        <meta property="og:image" content="{{ asset('og-image.png') }}"/>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <x-analytics.seanwash />
    </head>
    <body class="dark:bg-neutral-800 prose dark:prose-invert min-h-screen min-w-full flex flex-col justify-between">
        <div>
            <nav class="p-8 flex items-center space-x-4">
                <a href="{{ route('home') }}" aria-label="Home">
                    <img class="h-12 w-12 m-0 inline-block" src="{{ asset('profile-pic.png') }}" alt="">
                </a>

                @foreach($navLinks as $label => $url)
                    <a
                        @class([
                            'no-underline text-neutral-500 dark:text-neutral-400',
                            'font-bold text-neutral-900 dark:text-neutral-100' => Route::is(Str::of($label)->kebab()),
                        ])
                        href="{{ $url }}"
                    >{{ $label }}</a>
                @endforeach
            </nav>

            <main class="p-8 pt-0">
                {{ $slot }}
            </main>
        </div>

        <footer class="p-8 text-xs flex items-center space-x-2">
            <span>&copy; {{ config('app.name') }}.</span>

            <a
                href="https://github.com/seanwash/seanwashcom"
            >
                <x-icons.code-bracket />
                <span class="sr-only">View Source</span>
            </a>
        </footer>
    </body>
</html>
