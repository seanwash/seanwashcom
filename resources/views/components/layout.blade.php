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

        <x-analytics.fathom />
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
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd"
                          d="M14.447 3.027a.75.75 0 01.527.92l-4.5 16.5a.75.75 0 01-1.448-.394l4.5-16.5a.75.75 0 01.921-.526zM16.72 6.22a.75.75 0 011.06 0l5.25 5.25a.75.75 0 010 1.06l-5.25 5.25a.75.75 0 11-1.06-1.06L21.44 12l-4.72-4.72a.75.75 0 010-1.06zm-9.44 0a.75.75 0 010 1.06L2.56 12l4.72 4.72a.75.75 0 11-1.06 1.06L.97 12.53a.75.75 0 010-1.06l5.25-5.25a.75.75 0 011.06 0z"
                          clip-rule="evenodd"/>
                </svg>
            </a>
        </footer>
    </body>
</html>
