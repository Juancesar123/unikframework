<?php
return [
    'settings' => [
        'displayErrorDetails' => getenv('APP_DEBUG'),
        'determineRouteBeforeAppMiddleware' => false,
        'logger' => [
            'path' => __DIR__ . '/storage/framework/log/app.log',
            'name' => 'unikframework',
            'level' => Monolog\Logger::ERROR,
        ],
    ]
];