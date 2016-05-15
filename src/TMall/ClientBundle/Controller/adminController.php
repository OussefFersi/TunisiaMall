<?php

namespace TMall\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class adminController extends Controller
{
    

    
    public function stores_usersAction()
    {
        return $this->render('TMallClientBundle:admin:index.html.twig');
    }
    public function adminAction()
    {
        return $this->render('TMallClientBundle:admin:stores_users.html.twig');
    }
    
    public function stores_reviewsAction()
    {
        return $this->render('TMallClientBundle:admin:stores_reviews.html.twig');
    }
   
    
    

}


