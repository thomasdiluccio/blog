<?php

return [
    'production' => env('IS_PRODUCTION', false),
    'baseUrl' => env('APP_URL'),
    'title' => 'Toward desirable futures',
    'description' => 'Thomas di Luccio\'s personal notes on building sustainable, desirable, and resilient futures.',
    'collections' => [
        'posts' => [
            'path' => '{date|Y/m/d}/{filename}',
            'sort' => ['featured', '-date'],
            'perPage' => 9,
        ],
        'pages' => [
            'path' => '{filename}',
        ],
    ],
    'thumbnail' => function ($page, int $size) {
        return '/thumbnails/' . str_replace(
            ['.png', '.jpg', '.svg'],
            "@{$size}.webp",
            $page->featuredImage
        );
    }
];
