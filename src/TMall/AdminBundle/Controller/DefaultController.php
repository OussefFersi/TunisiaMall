<?php

namespace Tmall\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $vend=$this->statisticVendors();
        $cli=$this->statisticClient();
        $bout=$this->statisticBoutique();
        $prod=$this->statisticProd();
        $com=$this->statisticCom();
        $pan=$this->statisticPan();
       
        return $this->render('TmallAdminBundle:Main:index.html.twig',array('vendors' => $vend,
                
              'clients' => $cli,
              'boutiques' => $bout,
               'products' =>$prod, 
                'commands' =>$com,
                'baskets' =>$pan
                
                ));
    }
    
   
    
    public function ecommerceAction()
    {
        return $this->render('TmallAdminBundle:Main:e-commerce.html.twig');
    }
    
    
    public function statisticBoutique(){
        
        $em = $this -> container -> get('doctrine')->getEntityManager();
        
        $query = $em->createQuery(
        'select count(b.id) as a from TMallEntityBundle:boutique b');
        $nbrBout = $query->getResult();
        
        return $nbrBout;
        
    }
    public function statisticProd(){
        
        $em = $this -> container -> get('doctrine')->getEntityManager();
        
        $query = $em->createQuery(
        'select count(p.id) as a from TMallEntityBundle:produit p');
        $nbrP = $query->getResult();
        
        return $nbrP;
        
    }
    
     public function statisticCom(){
        
        $em = $this -> container -> get('doctrine')->getEntityManager();
        
        $query = $em->createQuery(
        'select count(c.id) as a from TMallEntityBundle:commande c');
        $nbrC = $query->getResult();
        
        return $nbrC;
        
    }
    public function statisticPan(){
        
        $em = $this -> container -> get('doctrine')->getEntityManager();
        
        $query = $em->createQuery(
        'select count(u.id) as a from TMallEntityBundle:Basket u');
        $nbrPan = $query->getResult();
        
        return $nbrPan;
        
    }
    
    public function statisticVendors(){
        
        $em = $this -> container -> get('doctrine')->getEntityManager();
        
        $query = $em->createQuery(
        "select count(u.id) as a from TMallEntityBundle:Utilisateur u where u.roles not in ('a:0:{}')  ");
        $nbrVen = $query->getResult();
        
        return $nbrVen;
        
    }
    
    public function statisticClient(){
        
        $em = $this -> container -> get('doctrine')->getEntityManager();
        
        $query = $em->createQuery(
        "select count(u.id) as a from TMallEntityBundle:Utilisateur u where u.roles in ('a:0:{}') ");
        $nbrCli = $query->getResult();
        
        return $nbrCli;
        
    }
    
    
     public function listProductAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TMallEntityBundle:produit')->findAll();
       
         $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $entities,
        $this->get('request')->query->get('page', 1)/*page number*/,
        3/*limit per page*/
    );
        return $this->render('TmallAdminBundle:Main:table_dynamic_products.html.twig', array(
            'pagination' => $pagination,
        ));
    }
   
    
    public function deleteAction($id) {
        

         
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TMallEntityBundle:produit')->find($id);

           

            $em->remove($entity);
            $em->flush();
        

        return $this->redirect($this->generateUrl('productslist'));
    }
}
