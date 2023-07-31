<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class MenuData extends Data
{
    public function __construct(
        public string $name,
        public string $url,
    ) {
    }
}
