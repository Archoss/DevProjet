<?php   
namespace Controller;

class SubscribeController extends \W\Controller\Controller
{

    public function sub()
    {
        //traiter le formulaire contact ici...

        $this->show('Subscribe/sub');
    }

    public function result()
    {
        //traiter le formulaire contact ici...

        $this->show('Subscribe/result');
    }
}
