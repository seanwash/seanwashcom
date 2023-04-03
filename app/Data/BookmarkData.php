<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class BookmarkData extends Data
{
    public function __construct(
        public string $name,
        public string $url,
        public string $type,
        public string $description,
    ) {}
}
