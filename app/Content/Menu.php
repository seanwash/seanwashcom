<?php

namespace App\Content;

use Illuminate\Support\Collection;

class Menu
{
    public static function all(): Collection
    {
        return collect([
            [
                'name' => 'Home',
                'url' => '/',
            ],
            [
                'name' => 'Uses',
                'url' => '/uses',
            ],
            [
                'name' => 'Bookmarks',
                'url' => '/bookmarks',
            ],
        ]);
    }
}
