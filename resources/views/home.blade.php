<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @production
            <link
                rel="icon"
                href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='0.9em' font-size='90'>🤖</text></svg>"
            >
        @endproduction

        @env('local', 'develop', 'staging')
            <link
                rel="icon"
                href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='0.9em' font-size='90'>🚧</text></svg>"
            >
        @endenv

        <title>{{ config('app.name') }}</title>

        <meta name="description" content="Software Developer based in Santa Cruz, CA" />
        <meta property="og:image" content="{{ asset('og-image.png') }}" />
        <meta property="og:description" content="Software Developer based in Santa Cruz, CA" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="dark:bg-neutral-800 prose dark:prose-invert flex flex-col justify-between min-h-screen">
        <div class="p-8 max-w-3xl">
            <img class="h-12 w-12 mt-0" src="{{ asset('profile-pic.png') }}" alt="">

            <h1>Sean Washington</h1>

            <p>Welcome! I'm a software developer based out of 🏝 <a href="https://www.google.com/maps/place/Santa+Cruz,+CA/@36.9759548,-122.0824993,13z">Santa Cruz, CA</a>. I've been building software since early 2012, with the bulk of my experience being on the web platform. I'm currently building tools to empower interior designers, both big at small, at
                <a href="https://onsidedoor.com">SideDoor</a>.</p>

            <p>Before SideDoor, I co-hosted the <a href="https://dnc.show">Does Not Compute</a> Podcast, built (the now-defunct)
                <a href="https://designkollective.com">Design Kollective</a>, and was an Engineering Lead at
                <a href="https://metalab.com">MetaLab</a>.</p>

            <p>You can find me on <a href="https://twitter.com/seanwashbot">Twitter</a> and <a href="https://github.com/seanwash">GitHub</a>.</p>
        </div>

        <div class="p-8 text-xs flex items-center space-x-2">
            <span>&copy; Sean Washington.</span>

            <a
                href="https://github.com/seanwash/seanwashcom"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                  <path fill-rule="evenodd" d="M14.447 3.027a.75.75 0 01.527.92l-4.5 16.5a.75.75 0 01-1.448-.394l4.5-16.5a.75.75 0 01.921-.526zM16.72 6.22a.75.75 0 011.06 0l5.25 5.25a.75.75 0 010 1.06l-5.25 5.25a.75.75 0 11-1.06-1.06L21.44 12l-4.72-4.72a.75.75 0 010-1.06zm-9.44 0a.75.75 0 010 1.06L2.56 12l4.72 4.72a.75.75 0 11-1.06 1.06L.97 12.53a.75.75 0 010-1.06l5.25-5.25a.75.75 0 011.06 0z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </body>
</html>
