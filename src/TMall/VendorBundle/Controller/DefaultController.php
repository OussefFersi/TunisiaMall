<?php

namespace TMall\VendorBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TMall\EntityBundle\Entity\produit;
use TMall\EntityBundle\Entity\pack;
use TMall\EntityBundle\Form\packageType;
use TMall\VendorBundle\Form\CommandeType;
use TMall\VendorBundle\Form\ApproveAndRejectedType;
use TMall\VendorBundle\Form\couponType;
use TMall\EntityBundle\Entity\commande;
use TMall\EntityBundle\Entity\boutique;
use TMall\EntityBundle\Entity\coupon;
use Symfony\Component\HttpFoundation\Response;
use TMall\EntityBundle\Entity\Utilisateur;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DefaultController extends Controller
{
   

   
            public function productsAction()
    {
                
           
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TMallEntityBundle:produit')->findAll();

        return $this->render('TMallVendorBundle:Default:products.html.twig', array(
            'entities' => $entities,
        ));     
                
        
    }
    
    
    
    public function rejectedAction() {
        
        
        
        $repository = $this->getDoctrine()->getRepository('TMallEntityBundle:commande');
        $commande = $repository->findByIsRejected(1);
        
        
        $order = $this->get('knp_paginator');
        $pagination = $order->paginate(
                $commande, $this->get('request')->query->get('page', 1)/* page number */, 2/* limit per page */
        );
        
        
        
        
        
        
        
        
        return $this->render('TMallVendorBundle:Default:rejected.html.twig',array('pagination'=>$pagination));
}

    public function approvedAction() {
        
        
        $repository = $this->getDoctrine()->getRepository('TMallEntityBundle:commande');
        $commande = $repository->findByIsRejected(0);
        
        
        $order = $this->get('knp_paginator');
        $pagination = $order->paginate(
                $commande, $this->get('request')->query->get('page', 1)/* page number */, 2/* limit per page */
        );
        
        
        return $this->render('TMallVendorBundle:Default:approved.html.twig',array('pagination'=>$pagination));
    }

   

    public function addOrderAction(Request $request) {
        
        $em = $this->getDoctrine()->getManager();
        
        $boutique = new boutique();
        $commande = new commande();

        $query = $em->createQuery(
                'SELECT b.nom
    FROM TMallEntityBundle:boutique b,TMallEntityBundle:commande c
    WHERE p.id = c.id
    ORDER BY b.nom ASC'
        );


        $form = $this->createForm(new CommandeType(), $commande);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();
        }

        return $this->render('TMallVendorBundle:Default:addOrder.html.twig', array(
                    'form' => $form->createView(), 'commandes' => $commande
        ));
    }

    
    public function editOrderAction($id,Request $request){
        
         $em = $this->getDoctrine()->getManager();
    $commande = $em->getRepository('TMallEntityBundle:commande')->find($id);
    if (!$commande) {
      throw $this->createNotFoundException(
              'No news found for id ' . $id
      );
    }
        
        $form = $this->createForm(new CommandeType(), $commande);

    $form->handleRequest($request);
 
    if ($form->isValid()) {
        $em->flush();
        return $this->redirect($this->generateUrl('tmall_vendor_approveOrder'));
    }
    
    $build['form'] = $form->createView();
        
      return $this->render('TMallVendorBundle:Default:updateOrder.html.twig', $build);  
        
    }
    
    
    public function supprimerOrderAction($id){
        
        
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("TMallEntityBundle:commande")->findAll();


        $order = $this->get('knp_paginator');
        $pagination = $order->paginate(
                $commande, $this->get('request')->query->get('page', 1)/* page number */, 2/* limit per page */
        );
        
        
        
        
        
        $em = $this -> container -> get('doctrine')->getEntityManager(); 
        $commande=$em->getRepository('TMallEntityBundle:commande')->find($id); 
        $commande->setIsRejected(1);
        $em->flush();
        
        
        return $this->render('TMallVendorBundle:Default:approve.html.twig',array('pagination'=>$pagination));
        
        
        
    }
    
    
    public function affirmerOrderAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("TMallEntityBundle:commande")->findAll();


        $order = $this->get('knp_paginator');
        $pagination = $order->paginate(
                $commande, $this->get('request')->query->get('page', 1)/* page number */, 2/* limit per page */
        );
        
        
        
        
        
        $em = $this -> container -> get('doctrine')->getEntityManager(); 
        $commande=$em->getRepository('TMallEntityBundle:commande')->find($id); 
        $commande->setIsRejected(0);
        $em->flush();
        
        
        return $this->render('TMallVendorBundle:Default:approve.html.twig',array('pagination'=>$pagination));
        
        
        
        
        
        
        
    }

    





    public function listOrdersAction() {

        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("TMallEntityBundle:commande")->findAll();


        $order = $this->get('knp_paginator');
        $pagination = $order->paginate(
                $commande, $this->get('request')->query->get('page', 1)/* page number */, 2/* limit per page */
        );

        $request = $this->getRequest();
        






        $form1 = $this->createForm(new ApproveAndRejectedType());

        return $this->render("TMallVendorBundle:Default:approve.html.twig", array("pagination" => $pagination));
    }
    
    
    
    
    
    
    
    public function deleteOrderAction($id){
        
        
        $em = $this -> container -> get('doctrine')->getEntityManager();
        
        
        $query = $em->createQuery(
    'DELETE 
    FROM TMallEntityBundle:commande c
    WHERE c.id = :id'
)->setParameter('id',$id);
        
        $coupon = $query->getResult();
     
        
        
     
        
        $em->flush();
        
        return $this->redirect($this->generateUrl('tmall_vendor_approveOrder'));
        
        
        
        
        
        
        
        
        
    }

    public function approveAction(){
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("TMallEntityBundle:commande")->findAll();


        $order = $this->get('knp_paginator');
        $pagination = $order->paginate(
                $commande, $this->get('request')->query->get('page', 1)/* page number */, 2/* limit per page */
        );
        
        $query = $em->createQuery("select c from TMallVendorBundle:commande where c.id=:id");
         
            $commande = $em->getRepository("TMallEntityBundle:commande")->findBy('id');
        
        
        
           
                
                $commande->setIsRejected(1);
                
            

            $em->persist($commande);
            $em->flush();


            

            
            
            
            
       

        
        
        return $this->render("TMallVendorBundle:Default:approve.html.twig", array("pagination" => $pagination)); 
        
        
        
    }
    
    public function showPDFAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("TMallEntityBundle:commande")->find($id);
        
        
        
         
        
        
        
        
        
        
    $html = $this->renderView('TMallVendorBundle:Default:pdf.html.twig', array(
    'commande'  => $commande
));
 
return new Response(
    $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
    200,
    array(
        'Content-Type'          => 'application/pdf',
        'Content-Disposition'   => 'attachment; filename="file.pdf"'
    ));

        
        
        
        
        
        
    }
    
    
    
    public function showImage($id){
        
        
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("TMallEntityBundle:commande")->find($id);
        
        
        
        
        $html = $this->renderView('TMall:Foo:bar.html.twig', array(
    'commande'  => $vars
));


return new Response(
    $this->get('knp_snappy.image')->getOutputFromHtml($html),
    200,
    array(
        'Content-Type'          => 'image/jpg',
        'Content-Disposition'   => 'filename="image.jpg"'
    )
);
        
        
        
        
        
    }
    
    
    
    public function rejectCouponAction($id){
        
        $em = $this -> container -> get('doctrine')->getEntityManager();
        
        
        $query = $em->createQuery(
    'DELETE 
    FROM TMallEntityBundle:coupon p
    WHERE p.id = :id'
)->setParameter('id',$id);
        
        $coupon = $query->getResult();
     
        
        
     
        
        $em->flush();
        
        return $this->redirect($this->generateUrl('t_mall_vendor_addCoupons'));
        
       
        
        
        
        
        
        
        
    }


    
    
    
    
    public function addCouponAction(Request $request){
        
        
        $em = $this->getDoctrine()->getManager();
        
        
        $coupon = new coupon();
        
        
         $form = $this->createForm(new couponType(), $coupon);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($coupon);
            $em->flush();
        }
        
        
        
        
        $coupon = $em->getRepository("TMallEntityBundle:coupon")->findAll();

      
        $order = $this->get('knp_paginator');
        $pagination = $order->paginate(
                $coupon, $this->get('request')->query->get('page', 1)/* page number */, 5/* limit per page */
        );
        
        
        
        
        
       return $this->render('TMallVendorBundle:Default:addCoupon.html.twig', array(
                    'form' => $form->createView(), 'pagination' => $pagination
        ));
     
    }
    
    
    public function listCouponsAction(Request $request){
        
        $em = $this->getDoctrine()->getManager();
        
        
       
        
            
        

        $order = $this->get('knp_paginator');
        $pagination = $order->paginate(
                $coupon, $this->get('request')->query->get('page', 1)/* page number */, 5/* limit per page */
        );

        $request = $this->getRequest();
        
        
        
        
        
        
        
        

        return $this->render('TMallVendorBundle:Default:listCoupon.html.twig', array(
                     'pagination' => $pagination
        ));
        
        
        
        
        
        
        
    }
    
      //added by oussef to display stores for a vendor    
    public function mystoresAction(){
        
       $id=$this->container->get('security.context')->getToken()->getUser()->getId();
         $em = $this->getDoctrine()->getManager();
         $query = $em->createQuery(
      'select p
      FROM TMallEntityBundle:boutique p
      WHERE p.idU = :idu'
   )->setParameter('idu',$id);
        $entities =$query->getResult();
       $paginator  = $this->get('knp_paginator');
       $pagination = $paginator->paginate(
        $entities,
        $this->get('request')->query->get('page', 1)/*page number*/,
        3/*limit per page*/
    );
        
       
        
        
        
        return $this->render("TMallVendorBundle:Default:mystores.html.twig",array("pagination"=>$pagination));
    }        
           
    
   
    
    
}

