<?php

namespace Application\Core;

class Controller
{
    public function app()
    {
        $settings = require __DIR__ . '/../../settings.php';
        $app = new \Slim\App($settings);
        require __DIR__ . '/../../dependencies.php';
        require __DIR__ . '/../../middleware.php';
        return $app;
    }

    public function view($filename, $data = array())
    {
        $templates = $this->app()->getContainer()->get('view');
        return $templates->render($filename, $data);
    }

    public function session()
    {
        return $this->app()->getContainer()->get('session');
    }

    public function redirect($url)
    {
        echo "<script>window.location = '$url'; </script>";
    }
}
