<?php

namespace Application\Controllers;

class HomeController
{
    private $request;
    private $response;
    private $args;
    
    public function __construct($request, $response, $args)
    {
        $this->request = $request;
        $this->response = $response;
        $this->args = $args;
    }
    
    public function home()
    {
        //var_dump($this->request);
        //var_dump($this->response);
        //var_dump($this->args);
        $this->response->getBody()->write("Hello, ". $this->args['name']);
    }

    public function akhyar($request, $response, $args)
    {
        $response->getBody()->write("aku akhyar");
    }
}
