<?php

return [
    'production' => env('IS_PRODUCTION', false),
    'baseUrl' => env('APP_URL'),
    'title' => 'Story maker > Toward desirable futures',
    'description' => 'Thomas di Luccio\'s personal notes on building sustainable, desirable, and resilient futures.',
    'collections' => [
        'posts' => [
            'path' => '{date|Y/m/d}/{filename}',
            'sort' => ['featured', '-date'],
        ],
        'pages' => [
            'path' => '{filename}',
        ],
    ],
];
