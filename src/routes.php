<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    $controller = new Application\Controllers\HomeController($request, $response, $args);
    $controller->home();
});
