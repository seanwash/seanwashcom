<?php

namespace App\Content;

use Illuminate\Support\Collection;

class Tools implements Content
{
    public static function title(): string
    {
        return 'Uses';
    }

    public static function description(): string
    {
        return 'A list of various tools and services that I use and recommend.';
    }

    public static function items(): Collection
    {
        return collect([
            [
                'name' => '1Password',
                'url' => 'https://1password.com',
                'price' => 'Paid',
                'description' => '1Password is literally the first thing I install on every new device.',
            ],
            [
                'name' => 'Bartender',
                'url' => 'https://www.macbartender.com',
                'price' => 'Paid',
                'description' => "Bartender helps keep my Mac's status bar nice and tidy. I primarily keep things to the next calendar event, the SoundSource icon, and the built-in control center icon and time display.",
            ],
            [
                'name' => 'CleanShot',
                'url' => 'https://cleanshot.com',
                'price' => 'Paid',
                'description' => "CleanShot quickly replaced MacOS's built in screenshot tooling for me. It's a one-stop shop and has everything I need for sharing what I'm working on with my team.",
            ],
            [
                'name' => 'Karabiner-Elements',
                'url' => 'https://karabiner-elements.pqrs.org',
                'price' => 'Free',
                'description' => 'Karabiner is my default tool for remapping keys on my mac, primarily for enabling my Hyper Key workflow. I use the hyper key in conjunction with Raycast so that I can launch my most often-used apps via shortcuts. For example, <code>hyper + t</code> will launch or focus my Terminal window, <code>hyper + i</code> will open or focus Intellij, etc. You can find my personal config <a href="https://gist.github.com/seanwash/e3b6bbcd806179a66883849f22c757d4">here</a>.',
            ],
            [
                'name' => 'You Need A Budget',
                'url' => 'https://www.ynab.com',
                'price' => 'Paid',
                'description' => "I've tried many budgeting apps over the years and YNAB has been the only app that I've been able to stick to long term. One of the main complaints I've seen is that it's not a setup and forget tool and that it requires ongoing maintenance, but that's exactly what I need. I've found that if I don't have to think about my budget, I'm not actually budgeting.",
            ],
            [
                'name' => 'Raycast',
                'url' => 'https://1password.com',
                'price' => 'Free',
                'description' => 'Raycast is a blazing fast alternative to Spotlight. I use it to launch apps, search my notes, and more.',
            ],
            [
                'name' => 'BetterMouse',
                'url' => 'https://better-mouse.com',
                'price' => 'Paid',
                'description' => "While I love my <a href='https://www.logitech.com/en-us/products/mice/mx-master-3s.910-006556.html'>MX Master 3S</a>, I don't love the software that Logitech provides. I've found BetterMouse to be a capable alternative!",
            ],
        ]);
    }
}
