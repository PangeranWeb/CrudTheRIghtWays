<?php

namespace Application\Controllers;

use Application\Core\Controller;
use Application\Models\StudentModel;

class StudentRegisterController extends Controller
{
    public function getRegisterAction($request, $response, $args)
    {
        
        $data['base_url'] = $request->getUri()->getBasePath();
        $error = $this->session()->getSegment('flash')->getFlash('flash');
        $data['error'] = $error['error'];
        $data['post'] = $error['post'];
        $view = $this->view('student_register', $data);
        return $response->getBody()->write($view);
    }

    public function postRegisterAction($request, $response, $args)
    {
        $post = $request->getParsedBody();

        $v = new \Valitron\Validator($post);
        $v->rule('required', array('name', 'email'))->message('{field} harus diisi')->label('Name');
        $v->rule('email', array('email'))->message('{field} harus berupa email')->label('Email');
        if($v->validate()) {
            echo "Yay! We're all good!";
        } else {
            $this->session()->getSegment('flash')->setFlash('flash', ['error' => $v->errors(), 'post' => $_POST]);
        }

        $this->redirect($request->getUri()->getBasePath()."/student_register");
    }

}
