@php
    $tools = [
        [
            'name' => '1Password',
            'url' => 'https://1password.com/',
            'price' => 'Paid',
            'description' => '1Password is literally the first thing I install on every new device.',
        ],
        [
            'name' => 'Bartender',
            'url' => 'https://www.macbartender.com/',
            'price' => 'Paid',
            'description' => 'Bartender helps keep my Mac\'s status bar nice and tidy. I primarily keep things to the next calendar event, the SoundSource icon, and the built-in control center icon and time display.',
        ],
        [
            'name' => 'CleanShot',
            'url' => 'https://cleanshot.com/',
            'price' => 'Paid',
            'description' => 'CleanShot quickly replaced MacOS\'s built in screenshot tooling for me. It\'s a one-stop shop and has everything I need for sharing what I\'m working on with my team.',
        ],
        [
            'name' => 'Karabiner-Elements',
            'url' => 'https://karabiner-elements.pqrs.org',
            'price' => 'Free',
            'description' => 'Karabiner is my default tool for remapping keys on my mac, primarily for enabling my Hyper Key workflow. I use the hyper key in conjunction with Raycast so that I can launch my most often-used apps via shortcuts. For example, <code>hyper + t</code> will launch or focus my Terminal window, <code>hyper + i</code> will open or focus Intellij, etc. You can find my personal config <a href="https://gist.github.com/seanwash/e3b6bbcd806179a66883849f22c757d4">here</a>.',
        ],
        [
            'name' => 'Monarch Money',
            'url' => 'https://www.monarchmoney.com',
            'price' => 'Paid',
            'description' => 'Monarch is my money management tool of choice. I\'ve tried a few others but ended up sticking with monarch for its collaboration features.',
        ],
        [
            'name' => 'Raycast',
            'url' => 'https://1password.com/',
            'price' => 'Free',
            'description' => 'Raycast is a blazing fast alternative to Spotlight. I use it to launch apps, search my notes, and more.',
        ],
    ];
@endphp

<x-layout :seo="$seo">
    <div class="max-w-3xl">
        <h1>Uses</h1>

        <ul>
            @foreach($tools as $tool)
                <li>
                    <header>
                        <a href="{{ $tool['url'] }}" target="_blank" rel="noopener noreferrer">{{ $tool['name'] }}</a>

                        <span class="inline-block ml-1 text-xs py-1 px-2 rounded-full bg-neutral-100 dark:bg-neutral-700">
                            {{ $tool['price'] }}
                        </span>
                    </header>

                    <p>{!! $tool['description'] !!}</p>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
