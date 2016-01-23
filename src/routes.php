<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    $controller = new Application\Controllers\HomeController($request, $response, $args);
    $controller->home();
});

$app->get('/student_register', function ($request, $response, $args) {
    $controller = new Application\Controllers\StudentRegisterController();
    $controller->getRegisterAction($request, $response, $args);
});

$app->post('/student_register', function ($request, $response, $args) {
    $controller = new Application\Controllers\StudentRegisterController();
    $controller->postRegisterAction($request, $response, $args);
});
