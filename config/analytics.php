<?php

return [
    'enabled' => env('ANALYTICS_ENABLED', false),
    'fathom' => [
        'site_id' => env('FATHOM_SITE_ID'),
        'script_url' => env('FATHOM_SCRIPT_URL', 'https://cdn.usefathom.com/script.js'),
    ],
];
