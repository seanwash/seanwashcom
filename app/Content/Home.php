<?php

namespace App\Content;

use Illuminate\Support\Collection;

class Home implements Content
{
    public static function title(): string
    {
        return 'Home';
    }

    public static function description(): string
    {
        return 'Software developer based in Santa Cruz, CA';
    }

    public static function items(): Collection
    {
        return collect();
    }
}
