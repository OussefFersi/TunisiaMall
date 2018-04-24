<?php

namespace TMall\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use TMall\EntityBundle\Entity\Basket;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use TMall\EntityBundle\Entity\boutique;
use TMall\EntityBundle\Entity\produit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use TMall\ClientBundle\Form\BoutiqueType;
use TMall\ClientBundle\Form\RechercheType;

class DefaultController extends Controller
{
    
    
    
         public function create_StoreAction(Request $request){
                    
                     $boutique = new boutique();
        $form = $this->createForm(new BoutiqueType(), $boutique);
        $form->handleRequest($request);
        
        
        
        if ($form->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $boutique->getPhoto();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
            $file->move($brochuresDir, $fileName);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $boutique->setPhoto($fileName);
            
            //modifier par oussef
            $boutique->setIdU($this->container->get('security.context')->getToken()->getUser()->getId());
            // ... persist the $product variable or any other work

            
        }
        $em = $this->getDoctrine()->getManager();
        $boutiq = $em->getRepository("TMallEntityBundle:boutique")->findAll();
        if ($form->isSubmitted() && $form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($boutique);
            $em->flush();
            
            
            
            
            
        }

        return $this->render('TMallClientBundle:Default:create_store.html.twig', array(
            'form' => $form->createView(),'boutiques'=>$boutiq
        ));
    }
    
         

                       public function pdetailsAction($id)
    {
                           
              
        
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('TMallEntityBundle:produit')->find($id);
      
       
         //pdfgenrator();

        return $this->render('TMallClientBundle:Default:product_details.html.twig', array(
            'entity' => $entity,
            
        ));           
      
    } 
    
                
                    
           public function indexAction($id)
    {
       // $boutiques=$request->get('CheckList[]');
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('TMallEntityBundle:produit')->findByBoutique($this->findboutique($id));
        if ($session->has('t_mall_client_cart')) {
            $panier = $session->get('t_mall_client_cart');
        } else {
            $panier = false;
        }

        
        
       $paginator  = $this->get('knp_paginator');
       $pagination = $paginator->paginate(
        $entities,
        $this->get('request')->query->get('page', 1)/*page number*/,
        3/*limit per page*/
    );
        return $this->render('TMallClientBundle:Default:index.html.twig', array('produits' => $entities, 't_mall_client_cart' => $panier,'pagination' => $pagination));
    }
    /**
     * Creates a new produit entity.
     *
     */
    private function findboutique($id){
        $em2 = $this->getDoctrine()->getManager();

       $boutique = $em2->getRepository('TMallEntityBundle:boutique')->find($id);
        
        return $boutique;
    }
             
      public function pdfgenratorAction(){
           
           $html = $this->renderView('TMallClientBundle:Default:product_details.html.twig', array(
    'some'  => 'azertyu'
     ));

    return new Response(
    $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
    200,
    array(
        'Content-Type'          => 'application/pdf',
        'Content-Disposition'   => 'attachment; filename="file.pdf"'
    )
);
           
       }             
               
   public function boutiqueDetailAction(){
        
       
         $em = $this->getDoctrine()->getManager();
        $boutiq = $em->getRepository("TMallEntityBundle:boutique")->findAll();
        $boutique =$this->get('knp_paginator'); 
         $pagination  = $boutique ->paginate(
        $boutiq,
        $this->get('request')->query->get('page', 1)/*page number*/,
        3/*limit per page*/
    );
        
       
        
        
        
        return $this->render("TMallClientBundle:Default:detailBoutique.html.twig",array("pagination"=>$pagination));
    }
    
       
       public function cordonateAction($cordonne){
        
        
        $em = $this->getDoctrine()->getManager();
        
        $cordonate = $em->getRepository("TMallEntityBundle:boutique")->findOneBy(array('cordonne'=>$cordonne));
        
    if ($cordonate){
        
        $boutique = $cordonate->getCordonne();
        
    }else {
        
        $boutique = null;
        
        
    }
    $response = new JsonResponse();
    return $response->setData(array('boutique'=>$boutique));
        
    }
    
    
    public function searchBoutiqueAction($boutique){
        
        $em = $this->getDoctrine()->getManager();
        $boutique = $em->getRepository("TMallEntityBundle:boutique")->findBoutiqueParameter($boutique);
        
        return $this->render("TMallClientBundle:Default:create_store.html.twig",array("boutique"=>$boutique));
        
        
    }
       
    public function rechercheBoutiqueAction(){
        
        $form = $this->createForm(new RechercheType());
        
         return $this->render("TMallClientBundle:Default:recherche.html.twig",array("form"=> $form->createView()));
        
    }   
       
    public function rechercheBoutiqueTraitementAction(){
    
        $form = $this->createForm(new RechercheType());
        $em = $this->getDoctrine()->getManager();
        $boutique = $em->getRepository("TMallEntityBundle:boutique");
        if($this->get('request')->getMethod() == 'POST'){
            
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            
            
            $boutique = $em->getRepository("TMallEntityBundle:boutique")->recherche($form['recherche']->getData());
            
        
            
            
        }
      
        
        
        
            return $this->render("TMallClientBundle:Default:stores.html.twig",array('boutiques'=>$boutique));
            
                }   
       
       public function supprimerAction($id) {
    $em=$this->getDoctrine()->getManager();
    $entity=$em->getRepository("TMallEntityBundle:Basket")->find($id);
    $em->remove($entity);
    $em->flush();

        return $this->redirect($this->generateUrl('t_mall_client_cart'));
    }

    public function ajouterAction($id) {
       /* $sessions = $this->getRequest()->getSession();
        if (!$sessions->has('t_mall_client_cart'))
            $sessions->set('t_mall_client_cart', array());
        $panier = $sessions->get('t_mall_client_cart');


        if (array_key_exists($id, $panier)) {

            if ($this->getRequest()->query->get('qte') != NULL)
                $panier[$id] = $this->getRequest()->query->get('qte');
            $this->get('session')->getFlashBag()->add('success', 'Quantity changed successfully');
        }
        else {
            if ($this->getRequest()->query->get('qte') != null)
                $panier[$id] = $this->getRequest()->query->get('qte');
            else
                $panier[$id] = 1;
            $this->get('session')->getFlashBag()->add('success', 'Article successfully added');
        }
        $sessions->set('t_mall_client_cart', $panier);*/
        
         $em=$this->getDoctrine()->getManager();
        $query=$em->createQuery("SELECT b FROM TMallEntityBundle:Basket  b   JOIN b.ID_P id_p   JOIN b.ID_U id_u WHERE id_p.id= :idp and id_u.id= :idu ")
                ->setParameter('idp',$id)
                ->setParameter('idu',$this->container->get('security.context')->getToken()->getUser()->getId());//$this->container->get('security.context')->getToken()->getUser()->getId()
        $panier = $query->getResult();

if($panier!=null)
{
    $panier[0]->setQte($panier[0]->getQte()+$this->getRequest()->query->get('qte'));
    $em->persist($panier[0]);
    $em->flush();
}

else
{
        
        $panier=new Basket();
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository("TMallEntityBundle:produit")->find($id);
        $user=$em->getRepository("TMallEntityBundle:Utilisateur")->find($this->container->get('security.context')->getToken()->getUser()->getId());//$this->container->get('security.context')->getToken()->getUser()->getId()
        $qt=$this->getRequest()->query->get('qte');
        $panier->setID_P($produit);
        $panier->setID_U($user);
        $panier->setQte($qt);
        $em->persist($panier);
        $em->flush();
}
       
        return $this->redirect($this->generateUrl('t_mall_client_cart'));
    }
       
      public function aboutUsAction() {


        return $this->render('TMallClientBundle:Default:aboutUs.html.twig');
    }

    public function contact_pageAction() {
        $message = null;
        $message2 = null;

        return $this->render('TMallClientBundle:Default:Contact.html.twig', array('message' => $message,'message2' => $message2));
    }

    public function cartAction() {
    /*    $session = $this->getRequest()->getSession();
        if (!$session->has('t_mall_client_cart'))
            $session->set('t_mall_client_cart', array());

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('TMallEntityBundle:produit')->findArray(array_keys($session->get('t_mall_client_cart')));
     */   $em = $this->getDoctrine()->getManager();
        $query=$em->createQuery("SELECT p FROM TMallEntityBundle:Basket  p  JOIN p.ID_U id_u JOIN p.ID_P id_p  WHERE id_u.id= :id")
               ->setParameter('id',$this->container->get('security.context')->getToken()->getUser()->getId());//$this->container->get('security.context')->getToken()->getUser()->getId()
        $produits = $query->getResult();

       return $this->render('TMallClientBundle:Default:cart.html.twig', array('paniers' => $produits));

    } 
       
     public function envoyermailAction() {

        $name = $this->get('request')->request->get('subject');
        $email1 = $this->get('request')->request->get('mail');
        $message = $this->get('request')->request->get('reclamation');
        $message1 = NULL;
        $message2 = NULL;


//    $mailer = $this->container->get('mailer');
        $em = $this->getDoctrine()->getEntityManager();
        $email = $em->getRepository("TMallEntityBundle:Utilisateur")->findBy(array('email' => $email1));
        if ($email != null && $this->getRequest()->getMethod() == 'POST') {

            $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername('costa21622929@gmail.com')
                    ->setPassword('21622929');


            $mailer = Swift_Mailer::newInstance($transport);
            $message = Swift_Message::newInstance()
                    ->setSubject($name)
                    ->setFrom($email1)
                    ->setTo('oussefpeidev@gmail.com')
                    ->setBody('From : ' . $email1 . '
                    
' . 'reclamation : ' . $message);



            if ($mailer->send($message)) {
                $message1 = "message sent successfully";
                return $this->render('TMallClientBundle:Default:contact.html.twig', array('message' => $message1));
            }
        } elseif ($this->getRequest()->getMethod() == "POST") {
            $message2 = "This email has not been found in the database";
        }
        return $this->render('TMallClientBundle:Default:contact.html.twig', array('message' => $message1,'message2' => $message2));
    }

    public function menuAction() {
        $em=$this->getDoctrine()->getManager();
    $query=$em->createQuery("SELECT count(p.id) FROM TMallEntityBundle:Basket p  JOIN p.ID_U id_u WHERE id_u.id= :id")
              ->setParameter('id',$this->container->get('security.context')->getToken()->getUser()->getId());//************************
    $articles = $query->getSingleScalarResult();

        return $this->render('TMallClientBundle:Default:logo.html.twig', array('articles' => $articles));
    }  
       
      }




