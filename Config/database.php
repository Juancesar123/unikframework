<?php
return [
    'doctrine' => [
        // if true, metadata caching is forcefully disabled
        'dev_mode' => true,

        // path where the compiled metadata info will be cached
        // make sure the path exists and it is writable
        'cache_dir' => __DIR__.'/../storage/framework/cache/data',

        // you should add any other path containing annotated entity classes
        'metadata_dirs' => [ __DIR__.'/../app/Models'],
        'default' => getenv('DB_CONNECTION', 'mysql'),
        'connection' => [
            'driver' => 'pdo_mysql',
            'host' => getenv('DB_HOST'),
            'port' => getenv('DB_PORT'),
            'dbname' => getenv('DB_DATABASE'),
            'user' => getenv('DB_USERNAME'),
            'password' => getenv('DB_PASSWORD'),
            'charset' => 'utf-8'
        ]
    ]
];