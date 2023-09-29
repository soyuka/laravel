<?php

return [
    'title' => 'API Platform',
    'description' => 'My awesome API',
    'version' => '1.0.0',

    /*
     *  Automatic registration of routes will only happen if this setting is `true`
     */
    'register_routes' => true,
    'prefix' => '/api',

    /*
     * Where are ApiResource defined
     * TODO: link the docs on how to plug on eloquent models or create apiResource like controllers :D
     */
    'resources' => [
        app_path('Models'),
    ],

    'formats' => [
        'jsonld' => ['application/ld+json']
    ],

    'patch_formats' => [
        'json' => ['application/merge-patch+json']
    ],

    'docs_formats' => [
        'jsonopenapi' => ['application/vnd.openapi+json'],
        'json' => ['application/json'],
        'jsonld' => ['application/ld+json'],
        'html' => ['text/html']
    ],

    'error_formats' => [
        'jsonproblem' => ['application/problem+json'],
    ]
];

