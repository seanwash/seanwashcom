<?php

namespace App\Content;

use Illuminate\Support\Collection;

interface Content
{
    public static function title(): string;

    public static function description(): string;

    public static function items(): Collection;
}
