<?php
$app->get('/', function($request, $response) {
  return $this->view->render($response, 'index.html');
});
$app->get('/hello/{name}', function ($request, $response, $args) {
  return $this->view->render($response, 'index.html', [
      'name' => $args['name']
  ]);
})->setName('profile');
$app->get('/profile', function($request) {
  return <<<HTML
  <h1>Profile</h1>
HTML;
});
$app->post('/data', function($request) {
  return json_encode($request->getBody());
});
$app->put('/data', function($request) {
  return json_encode($request->getBody());
});