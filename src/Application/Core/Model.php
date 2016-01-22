<?php

namespace Application\Core;

class Model
{
    public function app()
    {
        $settings = require __DIR__ . '/../../settings.php';
        $app = new \Slim\App($settings);
        require __DIR__ . '/../../dependencies.php';
        require __DIR__ . '/../../middleware.php';
        return $app;
    }

    public function db()
    {
        return $this->app()->getContainer()->get('database');
    }    
}
