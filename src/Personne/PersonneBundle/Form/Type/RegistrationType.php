<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Personne\PersonneBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    
    public function getParent()
    {
       // return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
         return 'fos_user_registration';
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        

        $builder
                
                
                ->add('roles', 'choice',
                        array('choices' => array(
                            
                            
                            'ROLE_VENDOR'   => 'ROLE_VENDOR'
                            ),
                            'expanded' => 'true',
                            'multiple' => 'true',
                            
                        ));
                
    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
?>