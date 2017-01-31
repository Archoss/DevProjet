<?php   
namespace Controller;

class LoginController extends \W\Controller\Controller
{

    public function log()
    {
        //traiter le formulaire contact ici...

        $this->show('Login/log');
    }
}