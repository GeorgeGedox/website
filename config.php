<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'encodedEmail' => 'e48c8da483818b96838192ca8081978d838a', // See _mail-protect.js for info
    'siteName' => 'GeorgeV',
    'description' => 'Website description.',
    'collections' => [
        'articles' => [
            'path' => 'blog/{-title}',
            'sort' => '-date',
        ]
    ],
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'active' : '';
    },
    'excerpt' => function ($page, $length = 255) {
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $page->getContent()),
            '<code>'
        );

        $truncated = substr($cleaned, 0, $length);
        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
];
