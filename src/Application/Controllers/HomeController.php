<?php

namespace Application\Controllers;

use Application\Core\Controller;
use Application\Models\HomeModel;

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
        $homeModel = new HomeModel;
        $homeModel->getAllHome();
        $view = $this->view('home');
        return $this->response->getBody()->write($view);
    }

}
