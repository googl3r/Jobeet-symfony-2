<?php

namespace Ens\JoobetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EnsJoobetBundle:Default:index.html.twig', array('name' => $name));
    }
}
