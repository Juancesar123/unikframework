<?php
$app->get('/', function($request, $response) {
  return $this->view->render($response, 'index.html');
});
