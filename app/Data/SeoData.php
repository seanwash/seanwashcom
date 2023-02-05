<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class SeoData extends Data
{
    public function __construct(
        public string $title,
        public string $description
    ) {
    }
}
