<?php

namespace Tmall\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TmallAdminBundle:Default:index.html.twig');
    }
}
