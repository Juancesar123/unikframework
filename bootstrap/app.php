<?php
/*
==============================================================================================
UNIK FRAMEWORK , Framework using slim
author : Juan Ceasar Andrianto
email  : juancesarandrianto@gmail.com
==============================================================================================
*/
require __DIR__ . '/../vendor/autoload.php';
$config = require('config/app.php');
$app = new Slim\App($config);
$dotenv = new Dotenv\Dotenv( __DIR__ .'/../');
$dotenv->load();
// Fetch DI Container
$container = $app->getContainer();

// Register Twig View helper
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig(__DIR__.'/../views', [
        'cache' => false
    ]);
    
    // Instantiate and add Slim specific extension
    $router = $c->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};
return $app;