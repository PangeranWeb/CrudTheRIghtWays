<?php

namespace Application\Controllers;

use Application\Core\Controller;

class HomeController extends Controller
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
        $this->db();
    }

}
