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
        <meta property="og:description" content="Software Developer based in Santa Cruz, CA" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="p-8 prose max-w-3xl dark:prose-invert">
            <img class="h-10 w-10" src="{{ asset('profile-pic.png') }}" alt="">

            <h1>Sean Washington</h1>

            <p>Welcome! I'm a software developer based out of 🏝 <a href="https://www.google.com/maps/place/Santa+Cruz,+CA/@36.9759548,-122.0824993,13z">Santa Cruz, CA</a>. I've been building software since early 2012, with the bulk of my experience being on the web platform. I'm currently building tools to empower interior designers, both big at small, at
                <a href="https://onsidedoor.com">SideDoor</a>.</p>

            <p>Before SideDoor, I co-hosted the <a href="https://dnc.show">Does Not Compute</a> Podcast, built (the now-defunct)
                <a href="https://designkollective.com">Design Kollective</a>, and was an Engineering Lead at
                <a href="https://metalab.com">MetaLab</a>.</p>

            <p>You can find me on <a href="https://twitter.com/seanwashbot">Twitter</a> and <a href="https://github.com/seanwash">GitHub</a>.</p>
        </div>
    </body>
</html>
