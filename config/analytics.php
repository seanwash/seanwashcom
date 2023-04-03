<?php

return [
    'enabled' => env('ANALYTICS_ENABLED', false),

    'seanwash' => [
        'site_id' => env('ANALYTICS_SITE_ID'),
        'script_url' => env('ANALYTICS_SCRIPT_URL', 'https://analytics.seanwash.com/tracker.js'),
    ],
];
