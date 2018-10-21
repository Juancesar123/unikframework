<?php
use App\Core\Request;
use App\Core\Router;
$router = new Router(new Request);
$router->get('/', function() {
  return <<<HTML
  <h1>Hello world</h1>
HTML;
});
$router->get('/profile', function($request) {
  return <<<HTML
  <h1>Profile</h1>
HTML;
});
$router->post('/data', function($request) {
  return json_encode($request->getBody());
});