<?php

namespace App\Content;

use Illuminate\Support\Collection;

class Menu
{
    static public function all(): Collection
    {
        return collect([
            [
                'name' => 'Home',
                'url' => route('home'),
            ],
            [
                'name' => 'Uses',
                'url' => route('uses'),
            ],
            [
                'name' => 'Bookmarks',
                'url' => route('bookmarks'),
            ],
        ]);
    }
}
