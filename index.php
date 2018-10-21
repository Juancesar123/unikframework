<?php
// include_once 'Core/Request.php';
// include_once 'Core/Router.php';
// $router = new Router(new Request);
// $router->get('/', function() {
//   return <<<HTML
//   <h1>Hello world</h1>
// HTML;
// });
// $router->get('/profile', function($request) {
//   return <<<HTML
//   <h1>Profile</h1>
// HTML;
// });
// $router->post('/data', function($request) {
//   return json_encode($request->getBody());
// });
require __DIR__ . '/vendor/autoload.php';
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');