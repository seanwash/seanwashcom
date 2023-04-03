<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class ToolData extends Data
{
    public function __construct(
        public string $name,
        public string $url,
        public string $price,
        public string $description,
    ) {}
}
