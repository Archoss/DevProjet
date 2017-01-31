<?php   
namespace Controller;

class LoginController extends \W\Controller\Controller
{

    public function login()
    {
        //traiter le formulaire contact ici...

        $this->show('Login/login');
    }
}