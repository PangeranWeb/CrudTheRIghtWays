<?php
// Routes

$app->get('/akhyar', function ($request, $response, $args) {
    $controller = new Application\Controllers\HomeController($request, $response, $args);
    $controller->akhyar($request, $response, $args);
});

$app->get('/[{name}]', function ($request, $response, $args) {
    $controller = new Application\Controllers\HomeController($request, $response, $args);
    $controller->home();
});
