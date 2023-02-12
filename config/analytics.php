<?php

return [
    'enabled' => env('ANALYTICS_ENABLED', false),
    'fathom' => [
        'site_id' => env('FATHOM_SITE_ID'),
        'script_url' => env('FATHOM_SCRIPT_URL', 'https://cdn.usefathom.com/script.js'),
    ],
    'seanwash' => [
        'site_id' => env('ANALYTICS_SITE_ID'),
        'script_url' => env('ANALYTICS_SCRIPT_URL', 'https://analytics.seanwash.com/tracker.js'),
    ],
];
