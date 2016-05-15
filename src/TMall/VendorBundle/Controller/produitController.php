<?php

namespace TMall\VendorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TMall\EntityBundle\Entity\produit;
use TMall\EntityBundle\Form\produitType;
use TMall\EntityBundle\Form\rechercheType;
/**
 * produit controller.
 *
 */
class produitController extends Controller
{

    /**
     * Lists all produit entities.
     *
     */
    public function indexAction($id)
    {
       // $boutiques=$request->get('CheckList[]');
       
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('TMallEntityBundle:produit')->findByBoutique($this->findboutique($id));
       $paginator  = $this->get('knp_paginator');
       $pagination = $paginator->paginate(
        $entities,
        $this->get('request')->query->get('page', 1)/*page number*/,
        3/*limit per page*/
    );
        return $this->render('TMallVendorBundle:Product:index.html.twig', array('pagination' => $pagination));
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
    
    
    public function createAction(Request $request)
    {   
        
        $id=$request->get('boutique_id');
        
        $entity = new produit();
        $form = $this->createCreateForm($entity,$id);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $entity->setBoutique($this->findboutique($id));
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('produit_show', array('id' => $entity->getId())));
        }

        return $this->render('TMallVendorBundle:Product:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a produit entity.
     *
     * @param produit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(produit $entity,$id)
    {
        
        $form = $this->createForm(new produitType(), $entity, array(
            'action' => $this->generateUrl('produit_create',array('boutique_id'=>$id)),
            'method' => 'POST',
            
        ));
        
        $form ->add('photo','iphp_file')
                ->add('submit', 'submit', array('label' => 'Create','attr' => array( 'class'=>'form-group btn btn-primary')));
                
              

        return $form;
    }

    /**
     * Displays a form to create a new produit entity.
     *
     */
    public function newAction($id)
    {   
        
       

        
        
        $entity = new produit();
        
      
       
        $form   = $this->createCreateForm($entity,$id);

        return $this->render('TMallVendorBundle:Product:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a produit entity.
     *
     */
    public function showAction($id)
    {
       
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TMallEntityBundle:produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find produit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        
        return $this->render('TMallVendorBundle:Product:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing produit entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TMallEntityBundle:produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find produit entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TMallVendorBundle:Product:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a produit entity.
    *
    * @param produit $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(produit $entity)
    {
        $form = $this->createForm(new produitType(), $entity, array(
            'action' => $this->generateUrl('produit_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
                 
        $form ->add('photo','iphp_file')   
                ->add('submit', 'submit', array('label' => 'Update','attr' => array( 'class'=>'form-group btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing produit entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TMallEntityBundle:produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find produit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('produit_edit', array('id' => $id)));
        }

        return $this->render('TMallVendorBundle:Product:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a produit entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TMallEntityBundle:produit')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find produit entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('produit'));
    }

    /**
     * Creates a form to delete a produit entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('produit_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete','attr' => array( 'class'=>'form-group btn btn-primary')))
            ->getForm()
        ;
    }
    
   public function rechercheAction(){
        $form=$this->createForm(new rechercheType());
        return $this->render('TMallVendorBundle:Product:recherche.html.twig', array(
            'form'=> $form->createView()
           
        ));
        
    }
    
    public function recherchetraitementAction(Request $request){
         $form=$this->createForm(new rechercheType());
        $form->handleRequest($this->get('request'));
            $ch=$form['recherche']->getData();
         
         //echo $ch;  
       // die();
         
        //if($request->getMethod()=='POST'){
            
            $em = $this->getDoctrine()->getManager(); 
        
      
      $entity= $em->getRepository('TMallEntityBundle:produit')->findOneByTitre($ch);
      
      //recherche($form['recherche']->getData());//
         //}else{
             
          //    throw $this->createNotFoundException('La page n\'existe pas.');
        // }
       
       return $this->render('TMallVendorBundle:Product:presentation.html.twig', array(
           'entity'      => $entity
           
       ));
    }
     public function presentationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('TMallEntityBundle:produit')->find($id);
        
        if (!$produit) throw $this->createNotFoundException('La page n\'existe pas.');
        
        return $this->render('TMallVendorBundle:Product:presentation.html.twig', array('produit' => $produit));
    }
}
