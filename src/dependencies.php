<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));
    return $logger;
};

$container['database'] = function($c) {
    $settings = $c->get('settings')['database'];
    $database = new PDO(
        'mysql:host='.$settings['host'].';dbname='.$settings['dbname'],
        $settings['user'], 
        $settings['password']
    );
    return $database;
};

$container['view'] = function($c) {
    $settings = $c->get('settings')['view_path'];
    $templates = new League\Plates\Engine($settings);
    return $templates;
};
