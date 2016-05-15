<?php

namespace Personne\PersonneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PersonneBundle:Default:index.html.twig');
    }
}
