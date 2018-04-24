<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tmall\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TMall\EntityBundle\Entity\boutique;

class BoutiqueController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TMallEntityBundle:boutique')->findAll();
       
         $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $entities,
        $this->get('request')->query->get('page', 1)/*page number*/,
        3/*limit per page*/
    );
        return $this->render('TmallAdminBundle:Main:table_dynamic_boutiques.html.twig', array(
            'pagination' => $pagination,
        ));
    }
   
    
    public function deleteAction($id) {
        

         
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TMallEntityBundle:boutique')->find($id);

           

            $em->remove($entity);
            $em->flush();
        

        return $this->redirect($this->generateUrl('boutiqueslist'));
    }
    
    
    
}
